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
            $this->load->view('admin/header');
            $this->load->view('admin/order/order');
            $this->load->view('admin/footer');
        }
        public function addOrder(){
            $this->load->view('admin/header');
            $this->load->view('admin/order/addOrder');
            $this->load->view('admin/footer');
        }

    }
?>