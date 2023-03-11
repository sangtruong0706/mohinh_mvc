<?php
    class post extends DController{

        public function __construct()
        {
            parent::__construct();
            Session::init();
        }
        public function index(){
            $this->addCategory();
        }
        public function addCategory(){
            $this->load->view('admin/header');
            $this->load->view('admin/post/addCategory');
            $this->load->view('admin/footer');
        }
        public function insertCategory(){
            if (isset($_POST['add_cate_post'])){
                $title = $_POST['title_post'];
                $desc = $_POST['desc_post'];
                $table = 'tbl_post';
                $data = array(
                    'title_post' => $title,
                    'desc_post' => $desc
                );
                $categoryModel = $this->load->model('categoryModel');
                $result = $categoryModel->insertCategoryPost($table, $data);
                if ($result == 1){
                    Session::set('message','Thêm danh mục bài viết thành công!');
                    header('Location:'.BASE_URL."/post/listCategory");
                }else{
                    Session::set('message','Thêm danh mục bài viết thất bại!');
                    header('Location:'.BASE_URL."/post/listCategory");
                }
            }
        }

        public function listCategory(){
            $this->load->view('admin/header');
            $table = 'tbl_post';
            $categoryModel = $this->load->model('categoryModel');
            $data['category'] = $categoryModel->postCategory($table);

            $this->load->view('admin/post/listCategory', $data);
            $this->load->view('admin/footer');
        }

        public function deleteCategory($id){
            $table = 'tbl_post';
            $cond = "id_post='$id'";
            $categoryModel = $this->load->model('categoryModel');
            $result = $categoryModel->deleteCategoryPost($table, $cond);
            if ($result == 1){
                Session::set('message','Xóa danh mục bài viết thành công!');
                header('Location:'.BASE_URL."/post/listCategory");
            }else{
                Session::set('message','Xóa danh mục bài viết thất bại!');
                header('Location:'.BASE_URL."/post/listCategory");
            }
        }

        public function editCategory($id){
            $table = 'tbl_post';
            $cond = "id_post='$id'";
            $categoryModel = $this->load->model('categoryModel');
            $data['categoryID'] = $categoryModel->categoryIDPost($table, $cond);
            $this->load->view('admin/header');
            $this->load->view('admin/post/editCategory', $data);
            $this->load->view('admin/footer');
        }
        public function updateCategory($id){

            $table = 'tbl_post';
            $cond = "id_post='$id'";
            $title = $_POST['title_post'];
            $desc = $_POST['desc_post'];
            $data = array(
                'title_post' => $title,
                'desc_post' => $desc
            );
            $categoryModel = $this->load->model('categoryModel');
            $result = $categoryModel->updateCategoryPost($table, $data, $cond);
            if ($result == 1){
                Session::set('message','Cập nhật danh mục bài viếtx1 thành công!');
                header('Location:'.BASE_URL."/post/listCategory");
            }else{
                Session::set('message','Cập nhật danh mục bài viếtx1 thất bại!');
                header('Location:'.BASE_URL."/post/listCategory");
            }
            
        }


    }
