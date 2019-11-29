<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ShopCart extends CI_Controller
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
            //$data['itemcategory'] = $_GET['category'];
        ;
        $data['shoppingcart'] = $this->cart->contents();
        if (count($this->cart->contents()) == 0) {
            // print_r($data['user']);
            echo "no such thing";
        }
        //print_r($data['user']);
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('pages/header.php', $data, TRUE);
        $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
        $this->load->view('pages/shopcart.php', $data);
    }
    public function remove()
    {
        $this->cart->destroy();
    }
    public function remove_item($rowid)
    {
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($data);
        redirect('index.php/shopcart');
    }
}
