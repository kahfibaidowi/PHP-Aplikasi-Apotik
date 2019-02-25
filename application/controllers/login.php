<?php

    /* class login
     * login ke halaman administrator
     *
     */
    class login extends CI_Controller{

        public function index(){
            login_protect();
            
            $this->load->view("login");
        }

        public function cek_login(){
            $this->load->model("general");
            
            $username = $this->input->post("username", true);
            $password = $this->input->post("password", true);
            $cek = $this->general->cek_login($username, $password);
            if($cek > 0){
                $this->session->set_userdata("admin_username", $username);

                $this->general->update_data_login($username);

                redirect(base_url()."admin/");
            }
            else{
                redirect(base_url()."login/");
            }
        }

        public function logout(){
            $this->session->unset_userdata("admin_username");
            redirect(base_url()."login/");
        }
    }