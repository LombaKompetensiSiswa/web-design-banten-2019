<?php

if(!isset($_GET['isi']))$_GET['isi']='';
	switch($_GET['isi']){

		case'':include"halaman/beranda.php";break;
		case'user':include"halaman/user.php";break;
		case'puser':include"program/puser.php";break;
		case'partai':include"halaman/partai.php";break;
		case'ppartai':include"program/ppartai.php";break;
		case'tps':include"halaman/tps.php";break;
		case'ptps':include"program/ptps.php";break;

		case'suara':include"halaman/suara.php";break;
		case'inputsuara':include"halaman/inputsuara.php";break;

	}

?>