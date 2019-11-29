<?php

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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
        $data['womenresult'] = $this->fashions->getWomenData();
        $data['menresult'] = $this->fashions->getMenData();
        $data['kidsresult'] = $this->fashions->getKidsData();
        $data['footwearresult'] = $this->fashions->getFootwearData();
        $data['accessoriesresult'] = $this->fashions->getAccessoriesData();

        $this->load->view('pages/category.php', $data);
    }
}
