<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

//    i have i problem in this functin that he shoulde return to the same function he come form it 
//    not return all  to home i will fix it later 
    public function lang() {
        if (isset($_POST['ar'])) {

            $this->session->set_userdata('lang', 'arabic');
            redirect(base_url('Users'));
        }
        if (isset($_POST['en'])) {
            $this->session->set_userdata('lang', 'english');
            redirect(base_url('Users'));
        }
    }

    public function index() {
        $data['nav'] = 'partial/_visitorNav';
        $data['content'] = 'contentsHome/home';
        $this->load->view('index', $data);
    }

    public function signUp() {

        if (isset($this->session->userdata['userData'])) {
            redirect(base_url('Task'));
        }

        if ($this->session->has_userdata('invalidData')) {
            $data['invalidData'] = $this->session->flashdata('invalidData');
        }
        $errors = $this->session->flashdata('errorsSignUP');
        $data['errors'] = $errors;
        $data['nav'] = 'partial/_visitorNav';
        $data['content'] = 'contentsHome/signup';

        /* start captcha */
        $vals = array(
            'img_path' => './captcha/',
            'img_url' => base_url() . '/captcha/',
            'img_width' => 200,
            'img_height' => '50',
            'expiration' => 7200,
            'word_length' => 8,
            'font_size' => 96,
            'img_id' => 'Imageid',
            'pool' => '01',
                // White background and border, black text and red grid
//            'colors' => array(
//                'background' => array(255, 255, 255),
//                'border' => array(255, 255, 255),
//                'text' => array(0, 0, 0),
//                'grid' => array(255, 40, 40)
//            )
        );

        $cap = create_captcha($vals);
        $data['cap'] = $cap;
//        to cleare session before us6e it 
        $this->session->unset_userdata('captchaWord');
        $this->session->set_userdata('captchaWord', $cap['word']);
        /* end captcha */


        $this->load->view('index', $data);
    }

    public function addUser() {

        $this->form_validation->set_rules('username', 'user name', 'required|min_length[7]|max_length[20]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'required|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'confirm password', 'required');
        $this->form_validation->set_rules('birthdate', 'birth date', 'required|min_length[6]');
        $this->form_validation->set_rules('phone', 'phone', 'required|exact_length[11]');
        $this->form_validation->set_rules('country', 'country', 'required|min_length[3]');
        $this->form_validation->set_rules('agree', 'agree', 'required');
        $this->form_validation->set_rules('captcha', 'captcha', 'required');

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();

            $this->session->set_flashdata('errorsSignUP', $errors);
            $this->session->set_flashdata('invalidData', $_POST);
            redirect(base_url('Users/signUp'));
        } else {

            $word = $this->session->userdata('captchaWord');

            if ($_POST['captcha'] != $word) {

                $errors = 'invalide captcha';

                $this->session->set_flashdata('errorsSignUP', $errors);
                redirect(base_url('Users/signUp'));
            }

            $data = array(
                'username' => $this->security->xss_clean($_POST['username']),
                'email' => $this->security->xss_clean($_POST['email']),
                'password' => $this->security->xss_clean($_POST['password']),
                'birth' => $this->security->xss_clean($_POST['birthdate']),
                'phone' => $this->security->xss_clean($_POST['phone']),
                'country' => $this->security->xss_clean($_POST['country']),
                'profilePicture' => 'uploads/profileImge/defult.PNG'
            );

            $id = $this->UserModel->addUser($data);
            $data['id'] = $id;
            $this->session->set_userdata('userData', $data);

            redirect(base_url('Task'));
        }
    }

    public function signIn() {

        if (isset($this->session->userdata['userData'])) {
            redirect(base_url('Task'));
        }

        $data['errorsSignIn'] = $this->session->flashdata('errorsSignIn');
        $data['errorsLogin'] = $this->session->flashdata('errorsLogin');
        if ($this->session->has_userdata('invalidData')) {
            $data['invalidData'] = $this->session->flashdata('invalidData');
        }
        $data['nav'] = 'partial/_visitorNav';
        $data['content'] = 'contentsHome/signin';
        $this->load->view('index', $data);
    }

    public function login() {

        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();

            $this->session->set_flashdata('errorsSignIn', $errors);
            $this->session->set_flashdata('invalidData', $_POST);
            redirect(base_url('Users/signIn'));
        } else {

            $data = array(
                'email' => $this->security->xss_clean($_POST['email']),
                'password' => $this->security->xss_clean($_POST['password']),
            );
            $data = $this->UserModel->login($data);
            if ($data) {

                $this->session->set_userdata('userData', $data[0]);


                redirect(base_url('Task'));
            } else {

                $this->session->set_flashdata('errorsLogin', 'invalid username or password');
                redirect(base_url('Users/signIn'));
            }
        }
    }

    public function signOut() {
        $this->session->unset_userdata('userData');
        redirect(base_url('Users/signIn'));
    }

    public function profile() {

        if (!isset($this->session->userdata['userData'])) {
            redirect(base_url('Users/signIn'));
        }
           

        $data['errorsProfile'] = $this->session->flashdata('errorsProfile');
        $data['updated'] = $this->session->flashdata('updated');
        $data['user'] = $this->session->userdata['userData'];
        $data['nav'] = 'partial/_userNav';
        $data['content'] = 'contentsprofile/profile';
        $this->load->view('index', $data);
    }

    public function updateProfile() {
            

//      start
        $this->form_validation->set_rules('password', 'password', 'required|matches[conpassword]');
        $this->form_validation->set_rules('conpassword', 'confirm password', 'required');
        $this->form_validation->set_rules('birth', 'birth date', 'required|min_length[6]');
        $this->form_validation->set_rules('phone', 'phone', 'required|exact_length[11]');
        $this->form_validation->set_rules('country', 'country', 'required|min_length[3]');

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('errorsProfile', $errors);
            redirect(base_url('Users/profile'));
        } else {

            if (!empty($_FILES['pic']['name'])) {

                $config['upload_path'] = './uploads/profileImge';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 10000;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('pic')) {
                    $errors = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('errorsProfile', $errors['error']);

                    $pic = $this->UserModel->getUserpic($_POST['email']);
                    $_POST['profilePicture'] = $pic[0]['profilePicture'];
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $_POST['profilePicture'] = 'uploads/profileImge/' . $data['upload_data']['file_name'];
                }
            } else {
                $pic = $this->UserModel->getUserpic($_POST['email']);
                $_POST['profilePicture'] = $pic[0]['profilePicture'];
            }

            unset($_POST['conpassword']);
            unset($_POST['update']);

            $this->UserModel->updateProfile($_POST);
            $_POST['id'] = $this->session->userdata('userData')['id'];
            $this->session->set_userdata('userData', $_POST);
            $this->session->set_flashdata('updated', 'updated succes');
            redirect(base_url('Users/profile'));
        }
    }

}
