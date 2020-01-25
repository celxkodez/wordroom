<?php


session_start();
require 'controllers/loginprepared.php';
if(isset($_POST['login'])){

  

  $userEmail = !empty($_POST['email']) ? trim($_POST['email']) : null;
  $password = !empty($_POST['password']) ? trim($_POST['password']) : null;

  $login = new Login($userEmail, $password);
  $_SESSION['user'] = $login->login();
  // $userdata = $database->selectFromRow('user', 'email', $userEmail);
}
$error = $_SESSION['user']['message'];
if($_SESSION['user']['status']) {
 
    header('Location:admin');
    exit();
  } 
require 'resources/views/admin/login.php';