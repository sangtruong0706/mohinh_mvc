<?php
class index extends DController
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function index()
    {
        $this->homePage();
    }
    public function homePage()
    {
        $categoryModel = $this->load->model('categoryModel');
        $table = 'tbl_category';
        $tablePost = 'tbl_category_post';
        $data['category'] = $categoryModel->categoryHome($table);
        $data['category_post'] = $categoryModel->categoryPostHome($tablePost);
        $this->load->view('user/header', $data);
        $this->load->view('user/slider');
        $this->load->view('user/home');
        $this->load->view('user/footer');
    }
    public function notFound()
    {
        $this->load->view('404');
    }

    public function contact()
    {
        $categoryModel = $this->load->model('categoryModel');
        $table = 'tbl_category';
        $tablePost = 'tbl_category_post';
        $data['category'] = $categoryModel->categoryHome($table);
        $data['category_post'] = $categoryModel->categoryPostHome($tablePost);
        $this->load->view('user/header', $data);
        $this->load->view('user/contact');
        $this->load->view('user/footer');
    }
}
