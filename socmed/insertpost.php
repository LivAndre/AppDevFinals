<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socmed/resource/php/class/core/init.php';
isLogin();
$user = new user();
$insertPost = new insertPost($_POST['statuspost'], $user->data()->name, $user->data()->id);
$insertPost->insertStatus();

header('Location:studentportal.php');

?>