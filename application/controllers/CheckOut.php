<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CheckOut extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('fashions');
    }
    public function index()
    {
        if ($_SESSION['isLoggedIn'] == false) {
            redirect('index.php/login');
        }
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['header'] = $this->load->view('pages/header.php', $data, TRUE);

        $data['item'] = $this->cart->contents();

        foreach ($this->cart->contents() as $cart) {
            $this->fashions->insert_trans($cart);
            $this->fashions->update_stock($cart);
        }
        foreach ($data['item'] as $row) {
            $data['itemcategory'] =  $row['category'];
            $data['transdetails'] = $this->fashions->getTransDet($data['itemcategory'], count($data['item']), $row['id']);
        }

        $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
        $this->cart->destroy();
        $this->load->view('pages/ordersuccess.php', $data);
    }
}
