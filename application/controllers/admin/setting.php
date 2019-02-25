<?php

    /* Setting Controller
     *
     */
    class setting extends CI_Controller{
        
        public function __construct(){
            parent::__construct();

            $this->load->model("admin/setting_model");
        }

        public function index(){
            $this->access->set_access([
                'administrator'
            ]);

            $this->load->view("admin/setting/general");
        }

        public function backup(){
            $this->access->set_access([
                'administrator'
            ]);

            $this->load->view("admin/setting/backup");
        }

        public function go_backup(){
            $this->access->set_access([
                'administrator'
            ]);

            $tables = $this->input->post("tables");

            if(in_array("tb_pegawai", $tables)){
                array_push($tables, "tb_login");
            }
            if(in_array("tb_transaksi", $tables)){
                array_push($tables, "tb_detail_transaksi");
            }

            $this->load->helper("download");
            force_download("backup_db_".date("Y-m-d").".sql", $this->setting_model->backup($tables));
        }

        public function restore(){
            $this->access->set_access([
                'administrator'
            ]);

            $this->load->view("admin/setting/restore");
        }

        public function go_restore(){
            $this->access->set_access([
                'administrator'
            ]);

            if($this->setting_model->upload("filequery")){
                $data = $this->setting_model->execute_restore_data();
                redirect(base_url()."login/logout/");
            }
            else{
                echo "upload gagal";
            }
        }

        public function change_setting(){
            $this->access->set_access([
                'administrator'
            ]);

            $data = [
                'nama' => $this->input->post("nama", true),
                'pemilik' => $this->input->post("pemilik", true),
                'alamat' => $this->input->post("alamat", true)
            ];
            $this->setting_model->change_setting($data);

            redirect(base_url()."admin/setting/");
        }
    }