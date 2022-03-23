<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <title>Biodata Mahasiswa</title>
</head>
<body style="background-color:#f5f7fa">
    <div class="container">
        <div class="header" style="height: 32px; text-align: center;">
            <a style="color: black; font-size: 32px;"><b>Biodata Mahasiswa</b></a>
        </div>
        <div class="content">
            <a class="muted-text">NAMA</a><br>
            <a><?= $_SESSION["nama"] ?></a>
            <br>
            <a class="muted-text">NIM</a><br>
            <a><?= $_SESSION["nim"] ?></a> 
            <br>
            <a class="muted-text">Email</a><br>
            <a><?= $_SESSION["email"] ?></a> 
            <br> 
        </div>
    </div>
</body>
</html>