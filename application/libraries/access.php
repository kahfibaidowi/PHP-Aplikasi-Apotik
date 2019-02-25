<?php

    /* class access
     *
     */
    class access{

        private $CI;

        public function __construct(){
            $this->CI = &get_instance();
        }

        public function set_access($level=[]){
            logout_protect();
            $this->CI->load->model("general");

            $admin = $this->CI->general->get_data_login($_SESSION['admin_username']);
            if(!in_array($admin['level'], $level)){
                redirect(base_url()."admin/forbidden");
            }
        }
    }