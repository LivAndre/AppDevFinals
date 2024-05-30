<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socmed/resource/php/class/core/init.php';

$user = new User();
echo $user->data()->name;
 ?>
