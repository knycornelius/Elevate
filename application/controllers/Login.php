<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $data['header'] = $this->load->view('pages/header.php', $data, TRUE);
            $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
            $this->load->view('pages/account.php', $data);
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = array(
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'is_active' => 1
                    );
                    $this->session->set_userdata($data);
                    $_SESSION["isLoggedIn"] = true;
                    if ($user['role_id'] == 1) {
                        echo "sdfdfsdf";
                        $_SESSION["privilege"] = "admin";
                        $_SESSION["iduser"] = $user['id_user'];
                        $_SESSION["name"] = $user['name'];
                        $_SESSION["email"] = $user['email'];
                        $_SESSION["address"] = $user['alamat'];
                        $_SESSION["notelp"] = $user['no_telp'];
                        redirect('cms');
                    } else {
                        echo  "sdsdfsdf";
                        $_SESSION["privilege"] = "user";
                        $_SESSION["iduser"] = $user['id_user'];
                        $_SESSION["name"] = $user['name'];
                        $_SESSION["email"] = $user['email'];
                        $_SESSION["address"] = $user['alamat'];
                        $_SESSION["notelp"] = $user['no_telp'];
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
        }
    }

    public function registration()
    {

        $this->form_validation->set_rules('fname', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['header'] = $this->load->view('pages/header.php', $data, TRUE);
            $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
            $this->load->view('pages/registeration.php', $data);
        } else {
            htmlspecialchars($this->input->post('fname', true));
            $data = array(
                'name' => htmlspecialchars($this->input->post('fname', true)),
                'email'  => htmlspecialchars($this->input->post('email', true)),
                'image'  => 'default.jpg',
                'password'  => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()

            );
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! your account has been created. Please Login</div>');
            redirect('login');
        }
    }
    public function logout()
    {

        $this->session->sess_destroy();
        redirect('home');
    }
}
