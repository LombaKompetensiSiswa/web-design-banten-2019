<?php
ob_start();
session_start();
if(!isset($_SESSION['iduserpetugas'])){
?>
	<script type="text/javascript">
		alert("Anda tidak dapat mengakses halaman ini tanpa login!");
		document.location.href="index.php";
	</script>
<?php
}
?>