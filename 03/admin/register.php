<?php
require_once 'dbconfig.php';
if(isset($_POST['btn-save'])){
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];
$flag = '1';
if($login->register($username,$password,$status,$flag)){
	header("Location: dashboard.php?inserted");
}else{
	header("Location: register.php?gagal");
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PEMILU</title>
<style type="text/css">
.header-menu{
    width:100%;
    height:150px;
    background:red;
    
}
#ss{
	padding:20px;
	text-decoration: : none;
}
.banner{
	width: 100%;
	height: 500px;
	background: url('images/berita_662822_800x600_IMG-20190417-WA0006.jpg');
	background-size: cover;

}
.pjmi{
	color: white;
	font-family: monospace;

}
.footer{
	width:100%;
	height: 80px;
	color: white;
	background:black;
}
</style>
</head>
<body style="margin:0px;padding:0px; background-color: black;">
<div class="header-menu" style="width:100%;height:150px;background:red;">
<img src="../images/bantenlogo.png" style="width:100px;height:100px;margin-left:100px;margin-top:40px; color: black"/>
<ul style="list-style-position:vertical;list-style-type:none;float:right; margin-right:80px;">
<li><a href="partai.php">partai</a></li>
<li><a href="pemilihan.php">pemilihan</a></li>
<li><a href="tps.php">Tps</a></li>
<li><a href="saksi.php">saksi</a></li>
<li><a href="artikel.php">artikel</a></li>
</ul>

</div>
<form action="" method="post">
	<input type="text" name="username">
	<input type="password" name="password">
	<select name="status">
    <option value="1">admin</option>
    <option value="0">user</option>
    </select>
	<input type="submit" name="btn-save">
</form>
</body>
</html>