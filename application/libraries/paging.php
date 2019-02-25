<?php

    /* CLASS PAGING
     *
     */
    class paging{

        private $cfg = [];
        private $active_page;

        public function __construct(){
            $this->cfg = [
                'base_url' => '',
                'pagination_class' => 'paging',
                'limit' => 10,
                'jml_halaman' => 1
            ];
        }

        public function initialize($config, $page){
            $this->cfg = array_merge($this->cfg, $config);
            $this->active_page = $page;
            $this->cfg['limit'] = ctype_digit($this->cfg['limit']) && $this->cfg['limit'] > 10 ? $this->cfg['limit'] : 10;
        }

        public function get_halaman(){
           $data = "<ul class='".$this->cfg['pagination_class']."'>";
           if($this->active_page > 1){
               $data .= $this->first().$this->prev();
           }
           $data .= $this->page_number();
           if($this->active_page < $this->cfg['jml_halaman']){
               $data .= $this->next().$this->last();
           }
           $data .= "</ul>";
           
           return $data;
        }

        public function prev(){
            $link_prev = $this->active_page-1;
            return "<li><a href='".$this->cfg['base_url']."/?page=".$link_prev."'>Prev</a></li>";
        }

        public function next(){
            $link_next = $this->active_page+1;
            return "<li><a href='".$this->cfg['base_url']."/?page=".$link_next."'>Next</a></li>";
        }

        public function first(){
            return "<li><a href='".$this->cfg['base_url']."/?page=1'>First</a></li>";
        }

        public function last(){
            return "<li><a href='".$this->cfg['base_url']."/?page=".$this->cfg['jml_halaman']."'>Last</a></li>";
        }

        public function page_number(){
            $data = "";
            if($this->cfg['jml_halaman'] > 5){
                if($this->active_page+2 > $this->cfg['jml_halaman']){
                    $inc = $this->cfg['jml_halaman']-$this->active_page;
                    $des = 2+(2-$inc);
                }
                elseif($this->active_page-2 < 1){
                    $des = $this->active_page-1;
                    $inc = 2+(2-$des);
                }
                else{
                    $des = 2;
                    $inc = 2;
                }

                for($i=$this->active_page-$des; $i<=$this->active_page+$inc; $i++){
                    $data .= $this->set_number($i);
                }
            }
            else{
                for($i=1; $i<=$this->cfg['jml_halaman']; $i++){
                    $data .= $this->set_number($i);
                }
            }

            return $data;
        }

        private function set_number($number){
            if($number == $this->active_page){
                return "<li class='active'>".$number."</li>";
            }
            else{
                return "<li><a href='".$this->cfg['base_url']."/?page=".$number."'>".$number."</a></li>";
            }
        }
    }