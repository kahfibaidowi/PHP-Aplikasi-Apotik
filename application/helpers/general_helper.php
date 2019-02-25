<?php

    /* general function
     *
     */
    function get_header(){
        $CI = &get_instance();

        $CI->load->view("admin/excerpt/header");
    }

    function get_footer($js = []){
        $CI = &get_instance();

        $CI->load->view("admin/excerpt/footer", [
            'js_module' => $js
        ]);
    }

    function get_admin($info){
        $CI = &get_instance();

        $CI->load->model("general");
        $data = $CI->general->get_data_login($_SESSION['admin_username']);

        if(array_key_exists($info, $data)){
            return $data[$info];
        }
        else{
            return "";
        }
    } 

    function login_protect(){
        if(isset($_SESSION['admin_username'])){
            redirect(base_url()."admin/");
        }
    }

    function logout_protect(){
        if(!isset($_SESSION['admin_username'])){
            redirect(base_url()."login/");
        }
    }

    function filter_page_number($page){
        if(ctype_digit($page)){
            return $page;
        }
        else{
            return 1;
        }
    }

    function sql_position($hal, $limit){
        return ($hal-1)*$limit;
    }

    function ubah_tglwaktu($tgl){
        $day = substr($tgl, 8, 2);
        $month = substr($tgl, 5, 2);
        $year = substr($tgl, 0, 4);

        $hour = substr($tgl, 11, 2);
        $min = substr($tgl, 14, 2);

        if($tgl == "0000-00-00 00:00:00"){
            return "";
        }
        else{
            return $day." ".ubah_bulan($month)." ".$year." Jam ".$hour.":".$min;
        }
    }

    function ubah_tgl($tgl){
        $day = substr($tgl, 8, 2);
        $month = substr($tgl, 5, 2);
        $year = substr($tgl, 0, 4);

        if($tgl == "0000-00-00 00:00:00"){
            return "";
        }
        else{
            return $day." ".ubah_bulan($month)." ".$year;
        }
    }

    function ubah_bulan($bln){
        $bulan = [
            "01" => "Januari",
            "02" => "Pebruari",
            "03" => "Maret",
            "04" => "April",
            "05" => "Mei",
            "06" => "Juni",
            "07" => "Juli",
            "08" => "Agustus",
            "09" => "September",
            "10" => "Oktober",
            "11" => "Nopember",
            "12" => "Desember"
        ];

        return $bulan[$bln];
    }

    function menu_aktifkan(){
        global $config;
        $config['menu_access'] = true;
    }
    function menu_nonaktifkan(){
        global $config;
        $config['menu_access'] = false;
    }
    function get_receive(){
        global $config;
        return $config['menu_access'];
    }
    function set_menu($access = []){
        ob_start();
        if(in_array(get_admin("level"), $access)){
            menu_aktifkan();
        }
        else{
            menu_nonaktifkan();
        }
    }
    function end_set_menu(){
        if(get_receive()){
            ob_end_flush();
        }
        else{
            ob_clean();
        }
        menu_nonaktifkan();
    }
    function set_dropdown(){

    }

    function conf_setting($field){
        $CI = &get_instance();
        $cfg = $CI->config->item("general_setting");

        return $cfg[$field];
    }