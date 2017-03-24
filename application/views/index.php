<?php
if ($this->session->has_userdata('lang')) {
    $this->lang->load('home', $this->session->userdata['lang']);
} else {
    $this->lang->load('home');
}
?>

<!DOCTYPE html>
<html >

    <head>
        <title>Tasks</title>
        <?php $this->load->view('partial/_links'); ?>



    </head>
    <body style="margin-top:58px">

        <div >

            <?php $this->load->view($nav); ?>
            <?php $this->load->view($content); ?>

        </div>

        <?php $this->load->view('partial/_scripts'); ?>

    </body>
</html>

