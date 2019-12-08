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
        $query = $this->db->query("select e.id_item 'id_item', e.item_name 'item_name', e.discount 'discount',
        e.disc_sd 'disc_sd', e.disc_ed 'disc_ed', e.image1 'image1', e.image2 'image2', e.image3 'image3', 
        sz.stock 'stock', sz.size 'size', sz.price 'price'
        from e_" . $category . " e, size_" . $category . " sz
        where e.id_item = sz.id AND sz.size = 'M';");
        return $query->result_array();
    }
    public function getWomenData()
    {
        $query = $this->db->query("select e.id_item 'id_item', e.item_name 'item_name', e.discount 'discount',
        e.disc_sd 'disc_sd', e.disc_ed 'disc_ed', e.image1 'image1', e.image2 'image2', e.image3 'image3', 
        sz.stock 'stock', sz.size 'size', sz.price 'price'
        from e_women e, size_women sz
        where e.id_item = sz.id AND sz.size = 'M';");

        return $query->result_array();
    }
    public function getMenData()
    {
        $query = $this->db->query("select e.id_item 'id_item', e.item_name 'item_name', e.discount 'discount',
        e.disc_sd 'disc_sd', e.disc_ed 'disc_ed', e.image1 'image1', e.image2 'image2', e.image3 'image3', 
        sz.stock 'stock', sz.size 'size', sz.price 'price'
        from e_men e, size_men sz
        where e.id_item = sz.id AND sz.size = 'M';");

        return $query->result_array();
    }
    public function getKidsData()
    {
        $query = $this->db->query("select e.id_item 'id_item', e.item_name 'item_name', e.discount 'discount',
        e.disc_sd 'disc_sd', e.disc_ed 'disc_ed', e.image1 'image1', e.image2 'image2', e.image3 'image3', 
        sz.stock 'stock', sz.size 'size', sz.price 'price'
        from e_kids e, size_kids sz
        where e.id_item = sz.id AND sz.size = 'M';");

        return $query->result_array();
    }
    public function getFootwearData()
    {
        $query = $this->db->query("select e.id_item 'id_item', e.item_name 'item_name', e.discount 'discount',
        e.disc_sd 'disc_sd', e.disc_ed 'disc_ed', e.image1 'image1', e.image2 'image2', e.image3 'image3', 
        sz.stock 'stock', sz.size 'size', sz.price 'price'
        from e_footwear e, size_footwear sz
        where e.id_item = sz.id AND sz.size = 'M';");

        return $query->result_array();
    }
    public function getAccessoriesData()
    {
        $query = $this->db->query("select e.id_item 'id_item', e.item_name 'item_name', e.discount 'discount',
        e.disc_sd 'disc_sd', e.disc_ed 'disc_ed', e.image1 'image1', e.image2 'image2', e.image3 'image3', 
        sz.stock 'stock', sz.size 'size', sz.price 'price'
        from e_accessory e, size_accessory sz
        where e.id_item = sz.id AND sz.size = 'M';");

        return $query->result_array();
    }
    public function getSelectedData($category, $id, $size)
    {

        $query = $this->db->query("select e.id_item 'id_item', e.item_name 'item_name', e.discount 'discount',
        e.disc_sd 'disc_sd', e.disc_ed 'disc_ed', e.image1 'image1', e.image2 'image2', e.image3 'image3', 
        sz.stock 'stock', sz.size 'size', sz.price 'price'
        from e_" . $category . " e, size_" . $category . " sz
        where e.id_item ='" . $id . "' AND sz.id='" . $id . "' AND sz.size='" . $size . "'");
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
    public function updateUser($email, $new_image, $name)
    {
        $query = $this->db->query("UPDATE user SET name ='$name', image ='$new_image'  WHERE email ='$email'");
    }
    public function getcustomerid($email)
    {
        $this->db->select('id_user');
        $query = $this->db->get_where('user', array('email' => $email));
        return $query;
    }
    public function getUserbyEmail($email)
    {
        $query = $this->db->query("SELECT * FROM user WHERE email = '$email'");
        return $query->result_array();
    }
    public function getUserbyToken($token)
    {
        $query = $this->db->query("SELECT * FROM user_token WHERE token = '$token'");
        return $query->result_array();
    }
    public function insert_user($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $image = $data['image'];
        $password = $data['password'];
        $roleid = $data['role_id'];
        $isactive = $data['is_active'];
        $date = $data['date_created'];
        $query1 = $this->db->query("SELECT count(*) as total from user");
        $result = $query1->result_array();
        foreach ($result as $row) {
            $count = $row['total'];
        }
        $count--;
        if ($count < 0) {
            $id_user = 'UC0001';
        } else {
            $query2 = $this->db->query("SELECT id_user FROM user LIMIT 1 OFFSET $count");

            $res = $query2->result_array();
            foreach ($res as $row) {
                $id_user = $row['id_user'];
            }
            $id_user++;
        }
        $query =  $this->db->query("INSERT INTO user(id_user, name, email, image, password, role_id, is_active, date_created) VALUES('$id_user', '$name', '$email', '$image', '$password', '$roleid', '$isactive', '$date');");
    }
    public function insert_usertoken($data)
    {

        $email = $data['email'];
        $token = $data['token'];
        $date = $data['date_created'];
        $query1 = $this->db->query("SELECT count(*) as total from user_token");
        $result = $query1->result_array();
        foreach ($result as $row) {
            $count = $row['total'];
        }
        $count--;
        if ($count < 0) {
            $id_token = 'UT0001';
        } else {
            $query2 = $this->db->query("SELECT id_token FROM user_token LIMIT 1 OFFSET $count");

            $res = $query2->result_array();
            foreach ($res as $row) {
                $id_token = $row['id_token'];
            }
            $id_token++;
        }
        $query =  $this->db->query("INSERT INTO user_token(id_token, email, token,  date_created) VALUES('$id_token', '$email','$token', '$date');");
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


    public function getTransDet($data, $byk)
    {
        // $idbrg = $data['id'];
        // $brgqty = $data['qty'];
        // $harga = $data['price'];
        // $date = date("Y-m-d");

        // $this->db->select('*');
        // $this->db->from('e_transaction_details');
        // $this->db->join('e_transaction', 'e_transaction.id_transaction = e_transaction_details.id_transaction ');
        // $this->db->join(e_$cat, e_$cat . '.id_item = e_transaction_details.id_item');
        // $this->db->limit($byk);
        // $query = $this->db->gFwet();
        // return $query->result_array();
        // $query = $this->db->query("select c.item_name 'item_name',td.qty,td.price 'price' ,t.transaction_date 'transaction_date'
        //     from e_transaction_details td, e_transaction t, e_".$cat." c
        //     where td.id_transaction = t.id_transaction and td.id_item = c.id_item");

        //echo "<pre>";
        //echo ($query1);
        //echo "</pre>";
        return $data;
    }

    public function update_stock($data)
    {

        $category = $data['category'];
        $idbrg = $data['id'];
        $stockdata = $this->db->query("SELECT stock from size_$category WHERE id = '$idbrg'");
        $stocked = $stockdata->result_array();
        foreach ($stocked as $row) {
            $stocks = $row['stock'] - $data['qty'];
        }

        $this->db->query("UPDATE size_$category SET stock = $stocks WHERE id = '$idbrg' ");
    }
}
