<?php
    class order extends DController{
        public function __construct()
        {
            $data = array();
            Session::checkSession();
            parent::__construct();
        }
        public function index(){
            $this->order();
        }
        public function order(){
            $categoryModel = $this->load->model('categoryModel');
            $table = 'tbl_category';
            $tablePost = 'tbl_category_post';
            $data['category'] = $categoryModel->categoryHome($table);
            $data['category_post'] = $categoryModel->categoryPostHome($tablePost);
            $this->load->view('user/header', $data);
            $this->load->view('admin/order/order');
            $this->load->view('admin/footer');
        }
        public function addOrder(){
            $categoryModel = $this->load->model('categoryModel');
            $table = 'tbl_category';
            $tablePost = 'tbl_category_post';
            $data['category'] = $categoryModel->categoryHome($table);
            $data['category_post'] = $categoryModel->categoryPostHome($tablePost);
            $this->load->view('user/header', $data);
            $this->load->view('admin/order/addOrder');
            $this->load->view('admin/footer');
        }

    }
?>