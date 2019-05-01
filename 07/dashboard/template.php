<?php
include "../koneksi/koneksi.php";
include "library.php";
session_start();
if(empty($_SESSION['login']))
{
    header('location:../login.php');
}
else
{
    $username = $_SESSION['login'];

    $mysql = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username'") or die ("query error");
    $select = mysqli_fetch_array($mysql);

    $_SESSION['IDUser'] = $select['IDUser'];
    $_SESSION['level'] = $select['level'];
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/template.css">
        <script>
            function attention(id)
            {
                if(confirm(id)){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <?php
        if(empty($_GET['open']))
        {
            echo "<script>document.location='?open=Homepage';</script>";
        }
        ?>
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-heading">Dashboard</div><!--penutup sidebar-heading-->
                <ul class="nav-sidebar">
                    <?php include "Navbar.php"; ?>
                </ul><!--penutup nav-sidebar-->
            </div><!--penutup sidebar-->
            <div class="content">
                <div class="nav-content">
                    <div class="bars">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div><!--penutup bars-->
                </div><!--penutup nav-content-->
                <div class="page-content">
                    <?php include "MainContent.php"; ?>
                </div><!--penutup page-content-->
            </div><!--penutup content-->
        </div><!--penutup wrapper-->
        <script src="../assets/js/sidebar.js"></script>
    </body>
</html>