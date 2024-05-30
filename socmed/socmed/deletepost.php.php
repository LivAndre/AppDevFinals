<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socmed/resource/php/class/core/init.php';
isLogin();
$user = new user();
$deletePost = new deletePost($_GET['id']);
$deletePost->deleteStatus();

header('Location:adminportal.php');

?>