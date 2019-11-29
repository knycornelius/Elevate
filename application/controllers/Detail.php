<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('fashions');
    }
    public function index()
    {
        //$data['data'] = $this->fashions->get_all_item();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['itemid'] = $_GET['id'];
        $data['itemcategory'] = $_GET['category'];
        $data['cat'] = $this->fashions->get_item_category($data['itemcategory']);
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('pages/header.php', $data, TRUE);
        $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
        $data['categories'] = $this->load->view('pages/category.php', NULL, TRUE);
        $data['item'] = $this->fashions->getSelectedData($data['itemcategory'], $data['itemid']);
        $this->load->view('pages/itemdetail.php', $data);
    }
    public function add_to_cart()
    {

        $user = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $items = $this->fashions->get($this->input->post('id'));
        $data['itemid'] = $_GET['id'];
        $data['itemcategory'] =  $_GET['category'];
        $datacart = array(
            'iduser' => $_SESSION["iduser"],
            'id' => $this->input->post('id'),
            'qty'  => $this->input->post('qty'),
            'price' =>  $this->input->post('prices'),
            'name' => $this->input->post('name'),
            'image1' => $this->input->post('images1'),
            'category' => $this->input->post('itemcategory'),
            'size' => $this->input->post('size')
        );
        $this->cart->insert($datacart);
        if (isset($_POST['addcart'])) {
            redirect('index.php/home');
        } else if (isset($_POST['buynow'])) {
            redirect('index.php/shopcart');
        }

        // redirect('detail');
        //redirect('index.php/category');
    }
    // public function getData()
    // {

    // }
}
