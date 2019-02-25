<?php
    
    class home extends CI_Controller{

        public function __construct(){
            parent::__construct();

            $this->load->model("admin/dashboard_model");
        }
        
        public function index(){
            $this->access->set_access([
                'administrator',
                'pelayanan',
                'gudang'
            ]);
            
            $this->load->view("admin/home", [
                'control_box' => $this->dashboard_model->control_box()
            ]);
        }
    }