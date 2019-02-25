<?php

    /* Model General
     * Login, Logout & pengaturan sistem
     *
     */
    class general extends CI_Model{
        
        public function cek_login($username, $password){
            /* QUERY CEK LOGIN DARI DATABASE
             *
             */
            $this->db->select("a.nip");
            $this->db->from("pegawai a, login b");
            $this->db->where("a.nip", "b.nip", false);
            $this->db->where("b.nip", $username);
            $this->db->where("b.password", sha1($password));
            $this->db->where("a.aktif", "y");
            $query = $this->db->get();

            /* RETURN ROWS OF RESULT */
            return $query->num_rows();
        }

        public function update_data_login($nip){
            /* QUERY MENGUBAH WAKTU LOGIN
             *
             */
            $this->db->update("login", ['last_login' => date("Y-m-d H:i:s")], ['nip' => $nip]);
        }

        public function get_data_login($nip){
            /* QUERY MENGAMBIL DATA LOGIN DARI DATABASE
             *
             */
            $this->db->select("a.nip, a.nama_lengkap, a.alamat, a.no_telp, a.level, b.last_login");
            $this->db->from("pegawai a, login b");
            $this->db->where("a.nip", "b.nip", false);
            $this->db->where("a.nip", $nip);
            $query = $this->db->get();

            return $query->row_array();
        }
    }