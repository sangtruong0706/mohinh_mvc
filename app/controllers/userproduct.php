<?php
    class userproduct extends DController{
        public function __construct()
        {
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->homeProduct();
        }
        public function homeProduct(){
            $categoryModel = $this->load->model('categoryModel');
            $productModel = $this->load->model('productModel');
            $tableCate = 'tbl_category';
            $tablePro = 'tbl_product';
            $tablePost = 'tbl_category_post';
            $data['category'] = $categoryModel->categoryHome($tableCate);
            $data['category_post'] = $categoryModel->categoryPostHome($tablePost);
            $data['all_product'] = $productModel->allProduct($tablePro);
            $this->load->view('user/header', $data);
            $this->load->view('user/homeProduct', $data);
            $this->load->view('user/footer');
        }
        public function categoryProduct($id){
            // $this->load->view('user/slider');  
            $categoryModel = $this->load->model('categoryModel');
            $tableCate = 'tbl_category';
            $tablePro = 'tbl_product';
            $tablePost = 'tbl_category_post';
            $data['category'] = $categoryModel->categoryHome($tableCate);
            $data['category_post'] = $categoryModel->categoryPostHome($tablePost);
            $data['category_id'] = $categoryModel->categoryIDHome($tableCate, $tablePro, $id);
            $this->load->view('user/header', $data);
            $this->load->view('user/categoryProduct', $data);
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