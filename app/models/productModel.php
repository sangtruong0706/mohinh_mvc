<?php
    class productModel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        // function category product
        public function category($table){
            $sql = "SELECT * FROM $table ORDER BY id_category DESC ";
            return $this->db->select($sql);
        } 
        public function product($tablePro, $tableCate){
            $sql = "SELECT * FROM $tablePro, $tableCate
            WHERE $tablePro.id_category=$tableCate.id_category ORDER BY $tablePro.id_product DESC ";
            return $this->db->select($sql);
        } 
        public function productID($table, $cond){
            $sql = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql);
        }

        public function insertProduct($table, $data){
            return $this->db->insert($table, $data);
        }
        
        public function updateProduct($table, $data, $cond){
            return $this->db->update($table, $data, $cond);
        }
        public function deleteProduct($table, $cond){
            return $this->db->delete($table, $cond);
        }


    }
