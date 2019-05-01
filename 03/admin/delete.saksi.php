<?php
require_once 'dbconfig.php';
$id_saksi = $_GET['id_saksi'];
if($saksi->delete($id_saksi)){
	header("Location: saksi.php?deleted");
} else {
	header("Location: saksi.php?gagaldeleted");
}
?>