<?php

    /* User Controller
     *
     */
    class user extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this->load->model("admin/pegawai_model");
            $this->load->model("admin/account_model");
        }

        public function index(){
            $this->access->set_access([
                'administrator'
            ]);

            $this->load->library("paging");
            $config = [
                'base_url' => 'http://localhost/apotik/admin/user',
                'limit' => 10,
                'jml_halaman' => ceil($this->pegawai_model->show_count_user()/10)
            ];
            $page = filter_page_number($this->input->get("page"));
            $this->paging->initialize($config, $page);

            $data_user = $this->pegawai_model->show_user_excerpt($page, $config['limit']);
            $this->load->view("admin/user/home", [
                'data' => $data_user,
                'pagination' => $this->paging->get_halaman()
            ]);
        }

        public function tambah($nip){
            $this->access->set_access([
                'administrator'
            ]);

            $this->load->view("admin/user/tambah", [
                'data' => $this->pegawai_model->show_pegawai($nip)
            ]);
        }

        public function input(){
            $this->access->set_access([
                'administrator'
            ]);

            $data = [
                'nip' => $this->input->post("nip", true),
                'password' => sha1($this->input->post("password")),
                'last_login' => '0000-00-00 00:00:00'
            ];

            $this->pegawai_model->input_user($data);
            $this->pegawai_model->aktifkan($this->input->post("nip", true));

            redirect(base_url()."admin/pegawai");
        }

        public function ubah_password(){
            $this->access->set_access([
                'administrator',
                'pelayanan',
                'gudang'
            ]);
            
            $this->load->view("admin/user/ubah-password");
        }

        public function update_password(){
            $this->access->set_access([
                'administrator',
                'pelayanan',
                'gudang'
            ]);

            $passl = sha1($this->input->post("passl"));
            $passb = sha1($this->input->post("passb"));

            if($this->account_model->is_true_last_password($passl)){
                $this->account_model->update_password($passb);

                redirect(base_url()."admin/user/ubah_password/");
            }
            else{
                redirect(base_url()."admin/user/ubah_password/");
            }
        }
    }