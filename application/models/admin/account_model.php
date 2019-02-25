<?php

    /* account model
     *
     */
    class account_model extends CI_Model{

        public function is_true_last_password($password){
            $query = $this->db->get_where("login", [
                'nip' => $_SESSION['admin_username'],
                'password' => $password
            ]);

            if($query->num_rows() > 0){
                return true;
            }
            else{
                return false;
            }
        }

        public function update_password($password){
            $query = $this->db->update("login", ['password' => $password], ['nip' => $_SESSION['admin_username']]);
            return true;
        }
    }