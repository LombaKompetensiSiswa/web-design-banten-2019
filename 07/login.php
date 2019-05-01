<?php
include "koneksi/koneksi.php";
session_start();
if(!empty($_SESSION['login']))
{
    header('location:dashboard/template.php?open=Homepage');
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="heading">Login</div><!--penutup heading-->
            <div class="frmLogin">
                <form method="POST">
                    <input type="text" name="username" placeholder="Username" required class="form-control">
                    <input type="password" name="password" placeholder="Password" required class="form-control"> 
                    <input type="submit" name="btnLogin" value="Login" class="btn btn-login">
                </form>
            </div><!--penutup frmLogin-->
        </div><!--penutup wrapper-->
    </body>
</html>
<?php
if(isset($_POST['btnLogin']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $mysql = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username' AND password = '$password'") or die ("query error");

    if(mysqli_num_rows($mysql) > 0)
    {
        $_SESSION['login'] = $username;
        header('location:dashboard/template.php?open=Homepage');
    }
    else
    {
        echo "<script>alert('Login anda gagal!');</script>";
        echo "<script>document.location='login.php';</script>";
    }
}
?>