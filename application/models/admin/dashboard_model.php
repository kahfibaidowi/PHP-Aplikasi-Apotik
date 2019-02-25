<?php

    /* dashboard model
     *
     */
    class dashboard_model extends CI_Model{
        
        public function control_box(){
            $tables = [
                'pegawai',
                'obat',
                'transaksi',
                [
                    'table' => 'transaksi',
                    'where' => [
                        'tgl_transaksi' => date("Y-m-d")
                    ]
                ]
            ];

            $data = [];
            
            foreach($tables as $box){
                if(is_array($box)){
                    $query = $this->db->get_where($box['table'], $box['where']);
                }
                else{
                    $query = $this->db->get($box);
                }
                array_push($data, $query->num_rows());
            }

            return $data;
        }
    }