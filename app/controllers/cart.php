<?php
    class cart extends DController{
        public function __construct()
        {
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->cart();
        }

        public function cart(){
            $categoryModel = $this->load->model('categoryModel');
            $table = 'tbl_category';
            $tablePost = 'tbl_category_post';
            $data['category'] = $categoryModel->categoryHome($table);
            $data['category_post'] = $categoryModel->categoryPostHome($tablePost);
            $this->load->view('user/header', $data);
            // $this->load->view('user/slider');      
            $this->load->view('user/cart');
            $this->load->view('user/footer');
        }

    }
?>