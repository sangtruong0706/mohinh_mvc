<?php
    class product extends DController{

        public function __construct()
        {
            parent::__construct();
            Session::init();
        }
        // public function index(){
        //     $this->addCategory();
        // }
        // public function addCategory(){
        //     $this->load->view('admin/header');
        //     $this->load->view('admin/product/addCategory');
        //     $this->load->view('admin/footer');
        // }
        // public function insertCategory(){
        //     if (isset($_POST['addproduct_cate'])){
        //         $title = $_POST['title_category'];
        //         $desc = $_POST['desc_category'];
        //         $table = 'tbl_category';
        //         $data = array(
        //             'title_category' => $title,
        //             'desc_category' => $desc
        //         );
        //         $categoryModel = $this->load->model('categoryModel');
        //         $result = $categoryModel->insertCategory($table, $data);
        //         if ($result == 1){
        //             Session::set('message','Thêm danh mục thành công!');
        //             header('Location:'.BASE_URL."/product/listCategory");
        //         }else{
        //             Session::set('message','Thêm danh mục thất bại!');
        //             header('Location:'.BASE_URL."/product/listCategory");
        //         }
        //     }
        // }

        // public function listCategory(){
        //     $this->load->view('admin/header');
        //     $table = 'tbl_category';
        //     $categoryModel = $this->load->model('categoryModel');
        //     $data['category'] = $categoryModel->category($table);

        //     $this->load->view('admin/product/listCategory', $data);
        //     $this->load->view('admin/footer');
        // }

        // public function deleteCategory($id){
        //     $table = 'tbl_category';
        //     $cond = "id_category='$id'";
        //     $categoryModel = $this->load->model('categoryModel');
        //     $result = $categoryModel->deleteCategory($table, $cond);
        //     if ($result == 1){
        //         Session::set('message','Xóa danh mục thành công!');
        //         header('Location:'.BASE_URL."/product/listCategory");
        //     }else{
        //         Session::set('message','Xóa danh mục thất bại!');
        //         header('Location:'.BASE_URL."/product/listCategory");
        //     }
        // }

        // public function editCategory($id){
        //     $table = 'tbl_category';
        //     $cond = "id_category='$id'";
        //     $categoryModel = $this->load->model('categoryModel');
        //     $data['categoryID'] = $categoryModel->categoryID($table, $cond);
        //     $this->load->view('admin/header');
        //     $this->load->view('admin/product/editCategory', $data);
        //     $this->load->view('admin/footer');
        // }
        // public function updateCategory($id){

        //     $table = 'tbl_category';
        //     $cond = "id_category='$id'";
        //     $title = $_POST['title_category'];
        //     $desc = $_POST['desc_category'];
        //     $data = array(
        //         'title_category' => $title,
        //         'desc_category' => $desc
        //     );
        //     $categoryModel = $this->load->model('categoryModel');
        //     $result = $categoryModel->updateCategory($table, $data, $cond);
        //     if ($result == 1){
        //         Session::set('message','Cập nhật danh mục thành công!');
        //         header('Location:'.BASE_URL."/product/listCategory");
        //     }else{
        //         Session::set('message','Cập nhật danh mục thất bại!');
        //         header('Location:'.BASE_URL."/product/listCategory");
        //     }
            
        // }

        // product
        public function index(){
            $this->addProduct();
        }
        public function addProduct(){
            $this->load->view('admin/header');

            $table = 'tbl_category';
            $categoryModel = $this->load->model('categoryModel'); //lấy dử liệu từ category truyền vào select
            $data['category'] = $categoryModel->category($table);

            $this->load->view('admin/product/addProduct', $data);
            $this->load->view('admin/footer');
        }

        public function insertProduct(){

            $title = $_POST['title_product'];
            $price = $_POST['price_product'];
            $desc = $_POST['desc_product'];
            $quantity = $_POST['quantity_product'];
            $cate = $_POST['category_product'];


            $images = $_FILES['img_product']['name'];
            $tmp_images = $_FILES['img_product']['tmp_name'];
            $div = explode('.', $images);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/uploads/product/".$unique_image;
            move_uploaded_file($tmp_images, $path_uploads);

            $table = 'tbl_product';
            $data = array(
                'title_product' => $title,
                'price_product' => $price,
                'desc_product' => $desc,
                'quantity_product' => $quantity,
                'id_category' => $cate,
                'img_product' => $unique_image
            );
            $productModel = $this->load->model('productModel');
            $result = $productModel->insertProduct($table, $data);
            if ($result == 1){
                Session::set('message','Thêm sản phẩm thành công!');
                // header('Location:'.BASE_URL."/product/addCategory");
            }else{
                Session::set('message','Thêm sản phẩm thất bại!');
                // header('Location:'.BASE_URL."/product/addCategory");
            }
        
        }

    }
