<?php

    /* penjualan model
     *
     */
    class penjualan_model extends CI_Model{

        public function show_penjualan_excerpt($halaman, $batas){
            $pos = sql_position($halaman, $batas);

            $this->db->select("a.id_transaksi, b.nama_lengkap, a.nama_lengkap as pembeli, a.tgl_transaksi");
            $this->db->from("transaksi a, pegawai b");
            $this->db->where("a.nip", "b.nip", false);
            $this->db->order_by("a.id_transaksi", "desc");
            $this->db->limit($batas, $pos);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function show_count_penjualan(){
            $query = $this->db->get("transaksi");

            return $query->num_rows();
        }

        public function show_transaksi($id){
            $this->db->select("a.id_transaksi, b.nama_lengkap as admin, a.nama_lengkap as pembeli, a.tgl_transaksi");
            $this->db->from("transaksi a, pegawai b");
            $this->db->where("a.nip", "b.nip", false);
            $this->db->where("a.id_transaksi", $id);
            $query = $this->db->get();

            return $query->row_array();
        }

        public function show_detail_transaksi($id){
            $this->db->select("a.id_obat, b.nama_obat, a.qty, a.harga, (a.qty*a.harga) as jumlah");
            $this->db->from("detail_transaksi a, obat b");
            $this->db->where("a.id_obat", "b.id_obat", false);
            $this->db->where("a.id_transaksi", $id);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function get_obat($nama){
            $this->db->select("id_obat, nama_obat, harga");
            $this->db->from("obat");
            $this->db->like("nama_obat", $nama);
            $this->db->limit(10);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function input($data){
            $id = $this->add_id();
            $transaksi = json_decode($data);

            $this->db->insert("transaksi", [
                'id_transaksi' => $id,
                'nip' => $_SESSION['admin_username'],
                'nama_lengkap' => $transaksi->pembeli,
                'tgl_transaksi' => date("Y-m-d")
            ]);

            foreach($transaksi->detail as $detail){
                $this->db->insert("detail_transaksi", [
                    'id_transaksi' => $id,
                    'id_obat' => $detail->idObat,
                    'qty' => $detail->QTY,
                    'harga' => $detail->harga
                ]);

                $this->db->set("stok", "stok-".$detail->QTY, false);
                $this->db->where("id_obat", $detail->idObat);
                $this->db->update("obat");
            }

            return $id;
        }

        private function add_id(){
            $this->db->select("id_transaksi");
            $this->db->from("transaksi");
            $this->db->order_by("id_transaksi", "desc");
            $this->db->limit("1");
            $query = $this->db->get();

            if($query->num_rows() > 0){
                $data = $query->row_array();

                return $data['id_transaksi']+1;
            }
            else{
                return 1;
            }

        }
    }