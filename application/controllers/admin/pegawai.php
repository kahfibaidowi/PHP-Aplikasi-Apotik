<?php

    /* Pegawai Controller
     *
     */
    class pegawai extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this->load->model("admin/pegawai_model");
        }

        public function index(){
            $this->access->set_access([
                'administrator'
            ]);

            $this->load->library("paging");
            $config = [
                'base_url' => 'http://localhost/apotik/admin/pegawai',
                'limit' => 10,
                'jml_halaman' => ceil($this->pegawai_model->show_count_pegawai()/10)
            ];
            $page = filter_page_number($this->input->get("page"));
            $this->paging->initialize($config, $page);

            $data_pegawai = $this->pegawai_model->show_pegawai_excerpt($page, $config['limit']);
            $this->load->view("admin/pegawai/home", [
                'data' => $data_pegawai,
                'pagination' => $this->paging->get_halaman()
            ]);
        }

        public function aktifkan($nip){
            $this->access->set_access([
                'administrator'
            ]);

            if($this->pegawai_model->is_user($nip)){
                $this->pegawai_model->aktifkan($nip);

                redirect(base_url()."admin/pegawai/");
            }
            else{
                redirect(base_url()."admin/user/tambah/".$nip);
            }
        }

        public function nonaktifkan($nip){
            $this->access->set_access([
                'administrator'
            ]);

            $this->pegawai_model->nonaktifkan($nip);

            redirect(base_url()."admin/pegawai/");
        }

        public function tambah(){
            $this->access->set_access([
                'administrator'
            ]);

            $this->load->view("admin/pegawai/tambah");
        }

        public function edit($nip){
            $this->access->set_access([
                'administrator'
            ]);

            $pegawai = $this->pegawai_model->show_pegawai($nip);

            $this->load->view("admin/pegawai/edit",[
                'data' => $pegawai
            ]);
        }

        public function hapus($nip){
            $this->access->set_access([
                'administrator'
            ]);

            $this->pegawai_model->hapus($nip);

            redirect(base_url()."admin/pegawai/");
        }

        public function input(){
            $this->access->set_access([
                'administrator'
            ]);

            $data = [
                'nama_lengkap' => $this->input->post("nama", true),
                'no_telp' => $this->input->post("telp", true),
                'alamat' => $this->input->post("alamat", true),
                'level' => strtolower($this->input->post("level", true)),
                'aktif' => 'n'
            ];

            $this->pegawai_model->input($data);

            redirect(base_url()."admin/pegawai/tambah");
        }

        public function update(){
            $this->access->set_access([
                'administrator'
            ]);

            $data = [
                'nama_lengkap' => $this->input->post("nama", true),
                'no_telp' => $this->input->post("telp", true),
                'alamat' => $this->input->post("alamat", true),
                'level' => strtolower($this->input->post("level", true))
            ];

            $this->pegawai_model->update($data, $this->input->post("nip"));

            redirect(base_url()."admin/pegawai/edit/".$this->input->post("nip"));
        }
    }