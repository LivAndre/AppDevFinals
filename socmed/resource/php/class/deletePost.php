<?php
    require_once('config.php');
    class deletePost extends config{

        public $post;

        function __construct($post = null){
            $this->post = $post;
        
        }

        public function deleteStatus(){
            $config = new config;
            $con = $config->con();
            $sql ="DELETE FROM `tbl_statuspost` WHERE `id` = $this->post";
            $data = $con->prepare($sql);
            $data->execute();
        }
    }
?>