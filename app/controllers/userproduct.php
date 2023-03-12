<?php
    class userproduct extends DController{
        public function __construct()
        {
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->categoryProduct();
        }

        public function categoryProduct(){

            // $this->load->view('user/slider');  
            $categoryModel = $this->load->model('categoryModel');
            $table = 'tbl_category';
            $tablePost = 'tbl_category_post';
            $data['category'] = $categoryModel->categoryHome($table);
            $data['category_post'] = $categoryModel->categoryPostHome($tablePost);
            $this->load->view('user/header', $data);
            $this->load->view('user/categoryProduct');
            $this->load->view('user/footer');
        }
        public function detailProduct(){
            $categoryModel = $this->load->model('categoryModel');
            $table = 'tbl_category';
            $tablePost = 'tbl_category_post';
            $data['category'] = $categoryModel->categoryHome($table);
            $data['category_post'] = $categoryModel->categoryPostHome($tablePost);
            $this->load->view('user/header', $data);
            // $this->load->view('user/slider');      
            $this->load->view('user/detailProduct');
            $this->load->view('user/footer');
        }


    }
?>