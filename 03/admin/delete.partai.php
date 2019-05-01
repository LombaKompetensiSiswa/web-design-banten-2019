<?php
require_once 'dbconfig.php';
$id_partai = $_GET['id_partai'];
if($partai->delete($id_partai)){
	header("Location: partai.php?deleted");
} else {
	header("Location: partai.php?gagaldeleted");
}
?>