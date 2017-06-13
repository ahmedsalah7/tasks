<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

    public function index() {

//        you start from here to send  all card that has must state and recive in must fo page
//        function index and function must the same start 

        if (!isset($this->session->userdata['userData'])) {
            redirect(base_url('Users/signIn'));
        }



        //call function that get card here
$cards = $this->TaskModel->getTasks('must', $this->session->userdata['userData']['id']);

        $data['cards'] = $cards;


        $data['nav'] = 'partial/_userNav';
        $data['content'] = 'contentsprofile/inner';
        $data['innerContent'] = 'contentsprofile/must';

        $this->load->view('index', $data);
    }

    public function mustDo() {

        if (!isset($this->session->userdata['userData'])) {
            
        }
//call function that get card here
        $cards = $this->TaskModel->getTasks('must', $this->session->userdata['userData']['id']);

        $data['cards'] = $cards;



        $data['nav'] = 'partial/_userNav';
        $data['innerContent'] = 'contentsprofile/must';
        $data['content'] = 'contentsprofile/inner';
        $this->load->view('index', $data);
    }

    public function done() {


        $cards = $this->TaskModel->getTasks('done', $this->session->userdata['userData']['id']);
        $data['cards'] = $cards;

        if (!isset($this->session->userdata['userData'])) {
            redirect(base_url('Users/signIn'));
        }

        $data['nav'] = 'partial/_userNav';
        $data['innerContent'] = 'contentsprofile/done';
        $data['content'] = 'contentsprofile/inner';
        $this->load->view('index', $data);
    }

    public function trash() {
        $cards = $this->TaskModel->getTasks('trash', $this->session->userdata['userData']['id']);

        $data['cards'] = $cards;

        if (!isset($this->session->userdata['userData'])) {
            redirect(base_url('Users/signIn'));
        }

        $data['nav'] = 'partial/_userNav';
        $data['innerContent'] = 'contentsprofile/trash';
        $data['content'] = 'contentsprofile/inner';
        $this->load->view('index', $data);
    }

    public function addCart() {
        $image = '';
        $file = '';

        if (!empty($_FILES['image']['name'])) {
            $this->load->library('upload');
            $config['upload_path'] = './uploads/Attachment_Images';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $data = array('upload_data' => $this->upload->data());
                $image = 'uploads/Attachment_Images/' . $_FILES['image']['name'];
            }
        }

        
        $data = array(
            'idUser' => $this->session->userdata['userData']['id'],
            'Description' => $this->security->xss_clean($_POST['desc']),
            'image' => $this->security->xss_clean($image),
            'title' => $this->security->xss_clean($_POST['title']),
            'date' => $this->security->xss_clean($_POST['mydate']),
            'state' => 'must',
        );

        $this->TaskModel->addCart($data);
        redirect(base_url('Task/mustDo'));
    }

    public function updateCard($id) {
        $this->TaskModel->update($id, $_POST);
        redirect(base_url('Task/mustDo'));
    }

    public function moveMust($id) {
        $data = array(
            'state' => 'must'
        );
        $this->TaskModel->updateState($id, $data);
        redirect(base_url('Task/mustDo'));
    }

    public function moveDone($id) {
        $data = array(
            'state' => 'done'
        );
        $this->TaskModel->updateState($id, $data);
        redirect(base_url('Task/done'));
    }

    public function moveTrash($id) {

        $data = array(
            'state' => 'trash'
        );
        $this->TaskModel->updateState($id, $data);
        redirect(base_url('Task/trash'));
    }

    public function remove($id) {
        $this->TaskModel->delete($id);
        redirect(base_url('Task/trash'));
    }

}
