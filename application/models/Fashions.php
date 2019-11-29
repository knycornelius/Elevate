<?php
class Fashions extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_item_category($category)
    {
        $query = $this->db->query("SELECT * FROM $category");
        return $query->result_array();
    }
    public function getWomenData()
    {
        $query = $this->db->query("SELECT * FROM e_women");

        return $query->result_array();
    }
    public function getMenData()
    {
        $query = $this->db->query("SELECT * FROM e_men");

        return $query->result_array();
    }
    public function getKidsData()
    {
        $query = $this->db->query("SELECT * FROM e_kids");

        return $query->result_array();
    }
    public function getFootwearData()
    {
        $query = $this->db->query("SELECT * FROM e_footwear");

        return $query->result_array();
    }
    public function getAccessoriesData()
    {
        $query = $this->db->query("SELECT * FROM e_accessory");

        return $query->result_array();
    }
    public function getSelectedData($category, $id)
    {
        $query = $this->db->query("SELECT * FROM $category WHERE id_item = '$id'");
        return $query->result_array();
    }
    public function get($id)
    {
        $query = $this->db->query("SELECT * FROM e_women WHERE id_item = '$id'");
        //$result = $query[0];
        return $query;
    }
    public function getUser()
    {
        $query = $this->db->query("SELECT * FROM user");
        return $query;
    }
    public function getcustomerid($email)
    {
        $this->db->select('id_user');
        $query = $this->db->get_where('user', array('email' => $email));
        return $query;
    }
    public function update_customer($alamats, $notelp, $email)
    {
        $query = $this->db->query("UPDATE user SET alamat='$alamats', no_telp='$notelp' where email='$email'");

        // $id = $this->db->insert_id();
        return $query;
        // return (isset($id)) ? $id : FALSE;
    }
    public function insert_trans($data)
    {
        $id = $_SESSION['iduser'];
        $idbrg = $data['id'];
        $brgqty = $data['qty'];
        $harga = $data['price'];
        $date = date("Y-m-d");
        $query1 = $this->db->query("SELECT count(*) as total FROM e_transaction");

        $result = $query1->result_array();
        foreach ($result as $row) {
            $count = $row['total'];
        }
        $count--;
        if ($count < 0) {
            $transaction_id = 'TR0001';
        } else {
            $query2 = $this->db->query("SELECT id_transaction FROM e_transaction LIMIT 1 OFFSET $count");

            $res = $query2->result_array();
            foreach ($res as $row) {
                $transaction_id = $row['id_transaction'];
            }
            $transaction_id++;
        }
        $query =  $this->db->query("INSERT INTO e_transaction(id_transaction, id_user, transaction_date) VALUES('$transaction_id', $id, '$date');");
        $query3 = $this->db->query("INSERT INTO e_transaction_details(id_transaction, id_item, qty, price) VALUES('$transaction_id','$idbrg', $brgqty,($harga*$brgqty))");
        // disini insert transaction detail
    }


    public function getTransDet($cat)
    {
        $this->db->select('*');
        $this->db->from('e_transaction_details');
        $this->db->join('e_transaction', 'e_transaction.id_transaction = e_transaction_details.id_transaction');
        $this->db->join($cat, $cat . '.id_item = e_transaction_details.id_item');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function update_stock($data)
    {

        $category = $data['category'];
        $idbrg = $data['id'];
        $stockdata = $this->db->query("SELECT stock from $category WHERE id_item = '$idbrg'");
        $stocked = $stockdata->result_array();
        foreach ($stocked as $row) {
            $stocks = $row['stock'] - $data['qty'];
        }

        $this->db->query("UPDATE $category SET stock = $stocks WHERE id_item = '$idbrg' ");
    }
}
