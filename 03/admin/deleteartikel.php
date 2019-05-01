<?php
require_once 'dbconfig.php';
$id_artikel = $_GET['id_artikel'];
if($artikel->delete($id_artikel)){
	header("Location: artikel.php?deleted");
} else {
	header("Location: artikel.php?gagaldeleted");
}
?>











