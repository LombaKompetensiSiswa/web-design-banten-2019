<?php
	ob_start();
	session_start();
	session_destroy();
?>
	<script type="text/javascript">
		alert("Anda berhasil logout!");
		document.location.href="../index.php";
	</script>
<?php
?>