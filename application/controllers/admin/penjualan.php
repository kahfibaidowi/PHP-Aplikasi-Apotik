<?php

    /* Penjualan Controller
     *
     */
    class penjualan extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this->load->model("admin/penjualan_model");
        }

        public function index(){
            $this->access->set_access([
                'administrator',
                'pelayanan'
            ]);

            $this->load->library("paging");
            $config = [
                'base_url' => 'http://localhost/apotik/admin/penjualan',
                'limit' => 10,
                'jml_halaman' => ceil($this->penjualan_model->show_count_penjualan()/10)
            ];
            $page = filter_page_number($this->input->get("page"));
            $this->paging->initialize($config, $page);

            $data_transaksi = $this->penjualan_model->show_penjualan_excerpt($page, $config['limit']);

            $this->load->view("admin/penjualan/home",[
                'data' => $data_transaksi,
                'pagination' => $this->paging->get_halaman()
            ]);
        }

        public function detail(){
            $this->access->set_access([
                'administrator',
                'pelayanan'
            ]);

            $data = $this->penjualan_model->show_transaksi($this->input->post("id", true));
            $detail = $this->penjualan_model->show_detail_transaksi($this->input->post("id", true));

            $this->load->view("admin/penjualan/ajax_detail", [
                'data' => $data,
                'detail' => $detail
            ]);
        }

        public function cetak($id){
            $this->access->set_access([
                'administrator',
                'pelayanan'
            ]);

            $data = $this->penjualan_model->show_transaksi($id);
            $detail = $this->penjualan_model->show_detail_transaksi($id);

            $this->load->view("admin/penjualan/cetak", [
                'data' => $data,
                'detail' => $detail
            ]);
        }

        public function tambah(){
            $this->access->set_access([
                'administrator',
                'pelayanan'
            ]);

            $this->load->view("admin/penjualan/tambah");
        }

        public function api_obat(){
            $this->access->set_access([
                'administrator',
                'pelayanan'
            ]);

            $data = $this->penjualan_model->get_obat($this->input->get("name", true));

            echo json_encode($data);
        }

        public function input(){
            $this->access->set_access([
                'administrator',
                'pelayanan'
            ]);

            $input = $this->penjualan_model->input($this->input->post("data"));

            echo $input;
        }
    }