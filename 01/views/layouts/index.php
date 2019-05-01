<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="public/css/custom.css?v=<?=rand(0,99999)?>">
    <link rel="stylesheet" href="public/css/header.css?v=<?=rand(0,99999)?>">
    <script src="public/js/js.css?v=<?=rand(0,99999)?>"></script>
    <script src="public/js/jquery.js?v=<?=rand(0,99999)?>"></script>
    <?php
        include_once('controller/page/page.php');
        session_start();
    ?>
    <title>TPS</title>
</head>
<body>
    <?php $pg = new Pages(); ?>
</body>
</html>