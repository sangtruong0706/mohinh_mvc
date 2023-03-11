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
        public function categoryID($table, $cond){
            $sql = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql);
        }

        public function insertProduct($table, $data){
            return $this->db->insert($table, $data);
        }
        
        public function updateCategory($table, $data, $cond){
            return $this->db->update($table, $data, $cond);
        }
        public function deleteCategory($table, $cond){
            return $this->db->delete($table, $cond);
        }


    }
