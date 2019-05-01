<?php
$id_pemilih = $_GET['id_pemilih'];
if($pemilih->delete($id_pemilih)){
	header("Location: pemilih.php?deleted");
} else {
	header("Location: pemilih.php?gagaldeleted");
}
?>