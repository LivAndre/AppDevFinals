<?php
    require_once('config.php');
    class insertPost extends config{

        public $post, $user,$user_id;

        function __construct($post = null, $user = null, $user_id = null){
            $this->post = $post;
            $this->user = $user;
            $this->user_id = $user_id;
        }

        public function insertStatus(){
            $config = new config;
            $con = $config->con();
            $sql ="INSERT INTO `tbl_statuspost`(`post` ,posted_by, user_id) VALUES ('$this->post' , '$this->user' , '$this->user_id')";
            $data = $con->prepare($sql);
            $data->execute();
        }
    }
?>