<?php
    
    /* PEGAWAI MODEL
     *
     */
    class pegawai_model extends CI_Model{
        
        public function show_pegawai_excerpt($halaman, $batas){
            $pos = sql_position($halaman, $batas);

            $this->db->select("*");
            $this->db->from("pegawai");
            $this->db->order_by("nama_lengkap", "asc");
            $this->db->limit($batas, $pos);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function show_count_pegawai(){
            $this->db->select("*");
            $this->db->from("pegawai");
            $query = $this->db->get();

            return $query->num_rows();
        }

        public function aktifkan($nip){
            $this->db->set("aktif", "y");
            $this->db->where("nip", $nip);
            $this->db->update("pegawai");

            return true;
        }

        public function nonaktifkan($nip){
            $this->db->set("aktif", "n");
            $this->db->where("nip", $nip);
            $this->db->update("pegawai");

            return true;
        }

        public function hapus($nip){
            $this->db->delete("pegawai", [
                'nip' => $nip
            ]);

            return true;
        }

        public function input($data){
            $nip = $this->add_id();
            $pegawai = array_merge($data, [
                'nip' => $nip
            ]);

            $this->db->insert('pegawai', $pegawai);
        }

        private function add_id(){
            $date=substr(date("Y"), 2, 2).date("m");
            $this->db->select("substring(nip, 5, 2) as jml");
            $this->db->from("pegawai");
            $this->db->where("substring(nip, 1, 4)=", $date);
            $this->db->order_by("nip desc");
            $this->db->limit("1");
            $query = $this->db->get();

            if($query->num_rows() > 0){
                $data = $query->row_array();

                $count=str_pad($data['jml']+1, 2, "0", STR_PAD_LEFT);
                return $date.$count;
            }
            else{
                return $date."01";
            }

        }

        public function is_user($nip){
            $query = $this->db->get_where("login", ['nip' => $nip]);

            if($query->num_rows() > 0){
                return true;
            }
            else{
                return false;
            }
        }

        public function show_pegawai($nip){
            $query = $this->db->get_where("pegawai", ['nip' => $nip]);

            return $query->row_array();
        }

        public function input_user($data){
            $this->db->insert("login", $data);
        }

        public function update($data, $nip){
            $this->db->update("pegawai", $data, ['nip' => $nip]);
        }

        public function show_user_excerpt($halaman, $batas){
            $pos = sql_position($halaman, $batas);

            $this->db->select("a.nip, a.nama_lengkap, a.level, b.last_login");
            $this->db->from("pegawai a, login b");
            $this->db->where("a.nip", "b.nip", false);
            $this->db->order_by("a.nama_lengkap", "asc");
            $this->db->limit($batas, $pos);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function show_count_user(){
            $this->db->select("*");
            $this->db->from("login");
            $query = $this->db->get();

            return $query->num_rows();
        }
    }