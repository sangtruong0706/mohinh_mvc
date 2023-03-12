<?php
    class categoryModel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        // function category product
        public function category($table){
            $sql = "SELECT * FROM $table ORDER BY id_category DESC ";
            return $this->db->select($sql);
        } 
        public function categoryHome($table){
            $sql = "SELECT * FROM $table ORDER BY id_category DESC ";
            return $this->db->select($sql);
        } 
        public function categoryID($table, $cond){
            $sql = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql);
        }
        public function insertCategory($table, $data){
            return $this->db->insert($table, $data);
        }
        public function updateCategory($table, $data, $cond){
            return $this->db->update($table, $data, $cond);
        }
        public function deleteCategory($table, $cond){
            return $this->db->delete($table, $cond);
        }
        //end function category product

        public function insertCategoryPost($table, $data){
            return $this->db->insert($table, $data);
        }
        public function postCategory($table){
            $sql = "SELECT * FROM $table ORDER BY id_category_post DESC ";
            return $this->db->select($sql);
        } 
        public function categoryPostHome($table){
            $sql = "SELECT * FROM $table ORDER BY id_category_post DESC ";
            return $this->db->select($sql);
        } 
        public function deleteCategoryPost($table, $cond){
            return $this->db->delete($table, $cond);
        }
        public function categoryIDPost($table, $cond){
            $sql = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql);
        }
        public function updateCategoryPost($table, $data, $cond){
            return $this->db->update($table, $data, $cond);
        }

    }
