<?php
session_start();
if (isset($_POST["submit"])){
    $_SESSION["nama"] = $_POST['nama'];
    $_SESSION["nim"] = $_POST['nim'];
    $_SESSION["email"] = $_POST['email'];
    header("LOCATION: sessionView.php");
}
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
    <title>Form Session Mahasiswa</title>
</head>
<body style="background-color:#f5f7fa">
    <div class="container">
        <div class="header" style="height: 32px; text-align: center;">
            <a style="color: black; font-size: 32px;"><b>Form Mahasiswa</b></a>
        </div>
        <div class="content" style="text-align: left;">
            <form id = "" action="" method="post">
                <a class="muted-text" style="font-size: 20px;">Nama : </a>
                <a><input type="text" name="nama" id="nama" style="width: 100%;"></a><br>
                <a class="muted-text" style="font-size: 20px;">NIM : </a>
                <input type="text" name="nim" id="nim" style="width: 100%;"><br>
                <a class="muted-text" style="font-size: 20px;">Email : </a>
                <input type="text" name="email" id="email" style="width: 100%;"><br><br>
                <button name="submit" type="submit" class="btn btn-primary" style="width: 100%; height: 40px;">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>