<?php
require 'dbconfig.php';
$id_tps = $_GET['id_tps'];
if($tps->delete($id_tps)){
	header("Location: tps.php?deleted");
} else {
	header("Location: tps.php?gagaldeleted");
}
?>