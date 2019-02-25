<?php

    /* Obat Controller
     *
     */
    class obat extends CI_Controller{

        public function __construct(){
            parent::__construct();

            $this->load->model("admin/obat_model");
        }

        public function index(){
            $this->access->set_access([
                'administrator',
                'gudang'
            ]);

            $this->load->library("paging");
            $config = [
                'base_url' => 'http://localhost/apotik/admin/obat',
                'limit' => 10,
                'jml_halaman' => ceil($this->obat_model->show_count_obat()/10)
            ];
            $page = filter_page_number($this->input->get("page"));
            $this->paging->initialize($config, $page);

            $data_obat = $this->obat_model->show_obat_excerpt($page, $config['limit']);

            $this->load->view("admin/obat/home", [
                'data' => $data_obat,
                'pagination' => $this->paging->get_halaman()
            ]);
        }

        public function tambah(){
            $this->access->set_access([
                'administrator',
                'gudang'
            ]);

            $this->load->view("admin/obat/tambah");
        }

        public function input(){
            $this->access->set_access([
                'administrator',
                'gudang'
            ]);

            $data = [
                'nama_obat' => $this->input->post("nama", true),
                'satuan' => strtolower($this->input->post("satuan", true)),
                'harga' => $this->input->post("harga", true),
                'stok' => $this->input->post("stok", true)
            ];

            $this->obat_model->input($data);

            redirect(base_url()."admin/obat/tambah/");
        }

        public function edit($id){
            $this->access->set_access([
                'administrator',
                'gudang'
            ]);

            $data_obat = $this->obat_model->show_obat($id);

            $this->load->view("admin/obat/edit", [
                'data' => $data_obat
            ]);
        }

        public function update(){
            $this->access->set_access([
                'administrator',
                'gudang'
            ]);

            $data = [
                'nama_obat' => $this->input->post("nama", true),
                'satuan' => strtolower($this->input->post("satuan", true)),
                'harga' => $this->input->post("harga", true),
                'togglestok' => $this->input->post("togglestok", true),
                'stoktambah' => $this->input->post("stoktambah", true)
            ];

            $this->obat_model->update($data, $this->input->post("id", true));

            redirect(base_url()."admin/obat/edit/".$this->input->post("id", true));
        }

        public function hapus($id){
            $this->access->set_access([
                'administrator',
                'gudang'
            ]);

            $this->obat_model->hapus($id);

            redirect(base_url()."admin/obat/");
        }
    }