<?php

    /* obat model
     *
     */
    class obat_model extends CI_Model{
        
        public function show_obat_excerpt($halaman, $batas){
            $pos = sql_position($halaman, $batas);

            $this->db->select("*");
            $this->db->from("obat");
            $this->db->order_by("id_obat", "desc");
            $this->db->limit($batas, $pos);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function show_count_obat(){
            $query = $this->db->get("obat");

            return $query->num_rows();
        }

        public function input($data){
            $this->db->insert("obat", $data);
        }

        public function show_obat($id){
            $query = $this->db->get_where("obat", ['id_obat' => $id]);

            return $query->row_array();
        }

        public function update($data, $id){
            $this->db->set("nama_obat", $data['nama_obat']);
            $this->db->set("satuan", $data['satuan']);
            $this->db->set("harga", $data['harga']);
            $this->db->set("stok", "stok".$data['togglestok'].$data['stoktambah'], false);
            $this->db->where("id_obat", $id);
            $query = $this->db->update("obat");

            return true;
        }

        public function hapus($id){
            $this->db->delete("obat", ['id_obat' => $id]);

            return true;
        }
    }