<?php
  include_once('config.php');
 ?>
<html>
<head>
    <title>Tambah User - TPU 1</title>
    <link href='style.css' rel="stylesheet" type="text/css" />
</head>
<body class="badan">
    <div class="body">
    <form action="tambahUser.php" method="post" name="tambahUser">
        <table border="1">
            <tr>
                <td>Nama User</td>
                <td><input type="text" name="namauser"></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
<a href="index.php">Home</a>
</div>
</body>
</html>
