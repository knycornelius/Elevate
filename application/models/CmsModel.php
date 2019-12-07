<?php
    class CmsModel extends CI_Model
    {
        public function __construct ()
        {
            parent::__construct();
            $this->load->database();
        }
        
        public function getData($category)
        {
            $query = $this->db->query("SELECT * FROM e_".$category);
            
            return $query->result_array();
        }

        public function getDetail($category, $id)
        {
            $table = "e_".$category;

            $query = $this->db->query("SELECT * FROM $table WHERE id_item = '".$id."'");
            
            return $query->result_array();
        }

        public function getPrice($category, $id, $size)
        {
            $table = "e_".$category;
            $tablesz = "size_".$category;

            $query = $this->db->query("SELECT * FROM $tablesz WHERE id = '".$id."' AND size = '".$size."'");
            
            return $query->result_array();
        }

        public function delete($category, $id) 
        {
            $table = "e_".$category;
            $tablesz = "size_".$category;

            $query = $this->db->query("DELETE FROM $table WHERE id_item = '".$id."'");
            $query = $this->db->query("DELETE FROM $tablesz WHERE id = '".$id."'");
        }

        public function add($category, $values)
        {
            $table = "e_".$category;

            $this->db->insert($table, $values);
        }

        public function addPrice($category, $id, $size, $price, $stock)
        {
            $table = "size_".$category;

            $query = $this->db->query("INSERT INTO $table VALUES('$id', $stock, '$size', $price);");
        }
        
        public function update($category, $value)
        {
            $table = "e_".$category;
            
            $this->db->replace($table, $value);
        }
        
        public function updatePrice($category, $id, $size, $price, $stock)
        {
            $table = "size_".$category;

            $query = $this->db->query("UPDATE $table SET Price = $price, Stock = $stock WHERE id = '$id' AND size = '$size'");
        }

        public function getLastID($cat, $id, $category)
        {
            $table = "e_".$category;
            $count = 0;
        
            $query1 = $this->db->query("SELECT count(*) as total FROM $table WHERE id_item LIKE '".$cat.$id."%'");

            $result = $query1->result_array();
            foreach($result as $row) {
                $count = $row['total'];
            }
            $count--;
            if($count < 0) 
            {
                return $cat.$id."001";
            }

            $query = $this->db->query("SELECT id_item FROM $table WHERE id_item LIKE '".$cat.$id."%' LIMIT 1 OFFSET $count");

            if($query)
            {
                $res = $query->result_array();
                foreach($res as $row) {
                    $id = $row['id_item'];
                }
                $id++;
                return $id;
            }
            else
            {
                return $cat.$id."001";
            }
        }

        public function getSub($field, $category) {

            $table = "sc_".$category;

            $query = $this->db->query("SELECT DISTINCT $field FROM $table");

            return $query->result_array();
        }
        
        public function getCustom($field, $category, $id) {

            $table = "e_".$category;

            $query = $this->db->query("SELECT $field FROM $table WHERE id_item = '".$id."'");

            $res = $query->result_array();
            
            $imageName = "";
            foreach($res as $row) {
                $imageName = $row[$field];
            }

            return $imageName;
        }

        public function getTransactionHistory() {
            
            $table = "e_transaction";
            $table__detail = "e_transaction_details";

            $query = $this->db->query("select tr.transaction_date 'date', u.name 'name', sum(td.price) 'price'
                from $table tr, $table__detail td, user u
                where tr.id_transaction = td.id_transaction AND
                tr.id_user = u.id_user
                Group By tr.transaction_date, u.name
                Order By tr.transaction_date desc, u.name;");

            return $query->result_array();
        }
    }
?>