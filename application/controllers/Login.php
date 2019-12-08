<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('fashions');
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
        print_r($email);
        print_r($password);
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            print_r($user['is_active']);
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

                        $_SESSION["privilege"] = "admin";
                        $_SESSION["iduser"] = $user['id_user'];
                        $_SESSION["name"] = $user['name'];
                        $_SESSION["email"] = $user['email'];
                        $_SESSION["address"] = $user['alamat'];
                        $_SESSION["notelp"] = $user['no_telp'];
                        redirect('index.php/cms');
                    } else {

                        $_SESSION["privilege"] = "user";
                        $_SESSION["iduser"] = $user['id_user'];
                        $_SESSION["name"] = $user['name'];
                        $_SESSION["email"] = $user['email'];
                        $_SESSION["address"] = $user['alamat'];
                        $_SESSION["notelp"] = $user['no_telp'];

                        redirect('index.php/home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('index.php/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('index.php/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('login');
        }
    }

    public function registration()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $data['header'] = $this->load->view('pages/header.php', $data, TRUE);
            $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
            $this->load->view('pages/registeration.php', $data);
        } else {
            $email = $this->input->post('email', true);
            $data = array(
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email'  => htmlspecialchars($email),
                'image'  => 'default.png',
                'password'  => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()

            );
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];
            // print_r($data);
            $this->fashions->insert_user($data);
            $this->fashions->insert_usertoken($user_token);
            // $this->db->insert('user_token', $user_token);
            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! your account has been created. Please activate your account</div>');
            redirect('index.php/login');
        }
    }
    private function _sendEmail($token, $type)
    {
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'testpemweb12@gmail.com';
        $config['smtp_pass'] = 'pemweb12';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);

        $this->email->set_newline("\r\n");
        // $this->email->initialize($config);
        $this->load->library('email', $config);

        $this->email->from('testpemweb12@gmail.com', 'Elevate E-commerce');
        $this->email->to($this->input->post('email'));
        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify your account : <a href="' . base_url() . 'login/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'login/resetpass?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user =  $this->db->get_where('user', ['email' => $email])->row_array();
        print_r($user);
        if ($user) {
            $user_token =  $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' has been activated! Please login.</div>');
                    redirect('index.php/login');
                } else {

                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Token expired.</div>');
                    redirect('index.php/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong token.</div>');
                redirect('index.php/login');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong email.</div>');
            redirect('index.php/login');
        }
    }
    public function logout()
    {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have successfully logged out.</div>');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->sess_destroy();
        redirect('index.php/login');
    }
    public function forgotpass()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $data['header'] = $this->load->view('pages/header.php', $data, TRUE);
            $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
            $this->load->view('pages/forgot-password.php', $data);
        } else {
            $email = $this->input->post('email');
            $data['user'] = $this->db->get_where('user', ['email' =>
            $email, 'is_active' => 1])->row_array();
            if ($data['user']) {
                $token = base64_encode(random_bytes(32));
                $user_token = array(
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                );


                $this->db->insert('user_token', $user_token);

                $this->_sendEmail($token, 'forgot');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Please check your email to reset your password!</div>');
                redirect('login/forgotpass');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered or activated</div>');
                redirect('login/forgotpass');
            }
        }
    }

    public function resetpass()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user =  $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            $user_token =  $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong token.</div>');
                redirect('index.php/login');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed! Wrong email.</div>');
            redirect('index.php/login');
        }
    }
    public function changePassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('index.php/login');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $data['header'] = $this->load->view('pages/header.php', $data, TRUE);
            $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
            $this->load->view('pages/change-pass.php', $data);
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed! Please login.</div>');
            redirect('index.php/login');
        }
    }
}
