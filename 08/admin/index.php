<!DOCTYPE html>
<html>
<head>
	<title>.:: Halaman login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="kotak">
		<form name="forminput" method="post" action="program/plogin.php">
			<p>.::Silahkan login</p><br>
			<label>Username</label><br>
			<input type="text" name="username" class="form-control" required=""><br>
			<label>Password</label><br>
			<input type="password" name="password" class="form-control" required=""><br>
			<button class="btn btn-primary" name="login">LOGIN SYSTEM</button>
		</form>
	</div>
</body>
</html>