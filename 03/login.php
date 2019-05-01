<?php
require 'config/dbconfig.php';
session_start();
if($_SESSION['user_session'] != ''){
    header("Location: admin/dashboard.php");
}
if(isset($_POST['btn_save'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($login->login($username,$password)){
    	redirect('admin/dashboard.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Applikasi pemilu sederhana</title>
<style type="css/stylesheet">
.azek{
    width:100px;
    margin-top:200px;
    margin-left:50%;
    background-color:red;
}
</style>
</head>
<body>
<div class="azek" style="background-color:red">
<form action="" method="post" enctype="multipart/form-data">
<input type="text" name="username"/>
<input type="password" name="password"/>
<input type="submit" name="submit"/>
</form>
</div>
</body>
</html>