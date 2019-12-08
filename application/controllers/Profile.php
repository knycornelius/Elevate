<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('fashions');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('pages/header.php', $data, TRUE);
        $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
        $data['categories'] = $this->load->view('pages/category.php', NULL, TRUE);

        $this->load->view('pages/profileview.php', $data);
    }
    public function editprofile()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $data['header'] = $this->load->view('pages/header.php', $data, TRUE);
            $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
            $data['categories'] = $this->load->view('pages/category.php', NULL, TRUE);

            $this->load->view('pages/editview.php', $data);
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/profile/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_iamge = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH, 'assets/images/profile/' . $old_iamge);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->fashions->updateUser($email, $new_image, $name);
                } else {
                    echo $this->upload->display_errors();
                }
            }



            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Profile has been updated!</div>');
            redirect('profile');
        }
    }
}
