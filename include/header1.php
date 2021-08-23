<?php
include('db/connection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="css-bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css-bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style-admin.css">
    <title>Admin main</title>
</head>

<body>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Danh /<span> Bạ</span></h3>
        </div>
    </header>

    <div class="sidebar">
        <center>
        </center>
        <a href="index.php"><i class="fas fa-desktop <?php if($page=='home'){echo 'active';} ?>"><span>Trang chủ</span></i></a>
        <a href="canbo.php"><i class="fas fa-table <?php if($page=='news'){echo 'active';} ?>"><span>Danh sách cán bộ</span></i></a>
    </div>
    