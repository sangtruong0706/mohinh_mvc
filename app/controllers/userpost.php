<?php
    class userpost extends DController{
        public function __construct()
        {
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->category();
        }

        public function category(){
            $categoryModel = $this->load->model('categoryModel');
            $table = 'tbl_category';
            $tablePost = 'tbl_category_post';
            $data['category'] = $categoryModel->categoryHome($table);
            $data['category_post'] = $categoryModel->categoryPostHome($tablePost);
            $this->load->view('user/header', $data);
            // $this->load->view('user/slider');      
            $this->load->view('user/categoryPost');
            $this->load->view('user/footer');
        }
        public function detailPost($id){
            $categoryModel = $this->load->model('categoryModel');
            $table = 'tbl_category';
            $tablePost = 'tbl_category_post';
            $data['category'] = $categoryModel->categoryHome($table);
            $data['category_post'] = $categoryModel->categoryPostHome($tablePost);
            $this->load->view('user/header', $data);
            // $this->load->view('user/slider');      
            $this->load->view('user/detailPost');
            $this->load->view('user/footer');
        }
       

    }
?>