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
        <?php
        $nama = "Timotius Winsen Bastian";
        $nim = "A11.2020.13062";
        $status = "AKTIF";
        $alamat = "Puri Gedawang Indah Blok O/4, Banyumanik Semarang";
        $hp = "082226416639";
        $email = "111202013062@mhs.dinus.ac.id";
        $agama = "Kristen";
        ?>
        <div class="header" style="height: 32px;">
            <p style="text-align: center;">Biodata Mahasiswa</p>
        </div>
        <div class="content">
            <a class="muted-text">NAMA</a><br>
            <a><?= $nama ?></a> 
            <br>
            <a class="muted-text">NIM</a><br>
            <a><?= $nim ?></a> 
            <br>
            <a class="muted-text">STATUS</a><br>
            <span class="badge-green"><?= $status ?></span>
            <br>
            <a class="muted-text">ALAMAT</a><br>
            <a><?= $alamat ?></a> 
            <br>
            <a class="muted-text">NO HP</a><br>
            <a href="tel:6282226416639"><?= $hp ?></a> 
            <br>
            <a class="muted-text">EMAIL</a><br>
            <a href="mailto:111202013062@mhs.dinus.ac.id"><?= $email ?></a> 
            <br>
            <a class="muted-text">AGAMA</a><br>
            <a><?= $agama ?></a> 
        </div>
    </div>
</body>
</html>