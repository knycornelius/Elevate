<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
    public function index () {
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('pages/header.php', NULL, TRUE);
        $data['pay'] = $this->load->view('pages/payment.php', NULL, TRUE);
        $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
        $this->load->view('pages/payment.php', $data);
    }

   
}