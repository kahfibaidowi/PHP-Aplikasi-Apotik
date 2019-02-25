<?php

    /* class home
     * default directory index configuration
     * project
     *
     */
    class home extends CI_Controller{
        
        public function index(){
            redirect(base_url()."login/");
        }
    }