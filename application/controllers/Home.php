<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('pages/header.php', $data, TRUE);
        $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
        $this->load->view('pages/homeview.php', $data);
    }


    public function subscribe()
    {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'xxx',
            'smtp_pass' => 'xxx',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $email = $this->input->post('email');

        $this->email->from('elevatee.id@gmail.com', 'Elevate Indonesia');
        $this->email->to($email);

        $this->email->subject('Test');
        $this->email->message('Mawar for the win!');

        $this->email->send();
        redirect('http://localhost/elevate');
    }
}
