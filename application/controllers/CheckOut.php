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
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        //print_r($data['orang']);
        $data['item'] = $this->cart->contents();
        $cart_info = $_POST['cart'];

        if (count($this->cart->contents()) == 0) {
            echo "no such thing";
        } else {
            echo "r";
        }
        foreach ($this->cart->contents() as $cart) {
            $this->fashions->insert_trans($cart);
            $this->fashions->update_stock($cart);
        }
        foreach ($data['item'] as $row) {
            $data['itemcategory'] =  $row['category'];
        }

        print_r($data['itemcategory']);
        $data['transdetails'] = $this->fashions->getTransDet($data['itemcategory']);
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('pages/header.php', $data, TRUE);
        $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
        $this->cart->destroy();
        $this->load->view('pages/ordersuccess.php', $data);
    }

    // public function proses_order()
    // {
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();

    //     $email =  $this->input->post('email');
    //     $alamat = $this->input->post('alamat');
    //     $no_telp = $this->input->post('telp');
    // $data['updateuser'] = $this->fashions->update_customer($alamat, $no_telp, $email);
    // $data['orang'] = $this->fashions->getcustomerid($email);
    // $this->load->view('pages/selesai', $data);
    // $cust_id = $this->fashions->getcustomerid($data['alamat']);
    // print_r($cust_id);
    // $transaksi = array(
    //     'id_user'     => $cust_id,
    //     'transaction_date' => date('Y-m-d')

    // );

    // $trans_id = $this->fashions->insert_trans($transaksi);
    // if ($cart = $this->cart->contents()) :
    //     foreach ($cart as $item) :
    //         $detail_transaksi = array(
    //             'id_transaction'   => $trans_id,
    //             'id_item'     => $item['id'],
    //             'qty'         => $item['qty'],
    //             'price'         => $item['price']
    //         );

    //         $cust_id = $this->fashions->insert_trans_detail($detail_transaksi);
    //     endforeach;
    // endif;

    // echo "Thank You! your order has been placed!<br />";

    //}
}
