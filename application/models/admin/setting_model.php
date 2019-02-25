<?php
    
    /* Setting Model
     *
     */
    class setting_model extends CI_Model{

        public function backup($tables){
            $this->load->dbutil();

            return $this->dbutil->backup([
                'tables' => $tables,
                'format' => 'txt',
                'filename' => 'backup_db.sql'
            ]);
        }

        public function upload($input_form){
            if(move_uploaded_file($_FILES[$input_form]['tmp_name'], "./backup.sql")){
                return true;
            }
            else{
                return false;
            }
        }

        public function execute_restore_data(){
            $content = file_get_contents("./backup.sql");
            $query = rtrim(trim($content), "\n;");
            $query_list = explode(";", $query);

            $row = 0;
            foreach($query_list as $q){
                $this->db->query($q);
                $row++;
            }
            unlink("./backup.sql");

            return $row;
        }

        public function change_setting($data){
            $this->load->helper("file");
            write_file("./application/config/general_setting.php", "<?php\n\n\t".'$config[\'general_setting\']'." = [\n\t\t'nama' => '".$data['nama']."',\n\t\t'pemilik' => '".$data['pemilik']."',\n\t\t'alamat' => '".$data['alamat']."'\n\t];");
        }
    }