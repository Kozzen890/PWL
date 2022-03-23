<?php
    function biodatadiri($nama,$nim,$kampus){
        echo "$nama || ";
        echo "$nim || ";
        echo "$kampus <br>";
    }
    function luaskelsegitiga($alas,$tinggi,$sisi){
        $luas = ($alas*$tinggi)/2;
        $keliling = $alas + $tinggi + $sisi;
        echo "Luas Segitiga : $luas || ";
        echo "Keliling Segitiga : $keliling <br>";
    }
    function luaskellingkaran($r){
        $luas = 3.14*$r*$r;
        $keliling = 2*3.14*$r;
        echo "Luas Lingkaran : $luas || ";
        echo "Keliling Lingkaran : $keliling <br>";
    }
    function Nilai($nilai){
        if ($nilai >= 85){
            $mark = "A";
        }
        else if ($nilai >= 70 && $nilai < 85){
            $mark = "B";
        }
        else if ($nilai >= 60 && $nilai < 70){
            $mark = "C";
        }
        else if ($nilai >= 50 && $nilai < 60){
            $mark = "D";
        }
        else if ($nilai >= 0 && $nilai < 50){
            $mark = "E";
        }
        else {
            $mark = "Nilai Tidak Valid";
        }
        return $mark;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <title>Biodata Mahasiswa</title>
</head>
<body style="background-color:#f5f7fa">
    <div class="container">
        <?php
        // biodata diri
        $nama = "Timotius Winsen Bastian";
        $nim = "A11.2020.13062";
        $kampus ="Universitas Dian Nuswantoro";
        
        // luas & keliling segitiga
        $alas = 8;
        $tinggi = 6;
        $sisi = 5;

        // Luas & Keliling Lingkaran
        $r = 10;

        //Penentuan Nilai
        $nilai = 92;

        ?>
        <div class="header" style="text-align: center;">
            <a style="color: black; font-size: 32px;"><b>BIODATA MAHASISWA</b></a><br>
            <a style="font-size: 26px;"><?= biodatadiri($nama,$nim,$kampus) ?></a>
        </div>
        <div class="content">
            <a class="muted-text" style="font-size: 28px;">Luas dan Keliling Segitiga</a><br>
            <a style="font-size: 24px;"><?= "Alas : $alas || Tinggi : $tinggi" ?></a><br>
            <a style="font-size: 24px;"><?= luaskelsegitiga($alas,$tinggi,$sisi) ?></a> 
            <br>
            <a class="muted-text" style="font-size: 28px;">Luas dan Keliling Lingkaran</a><br>
            <a style="font-size: 24px;"><?= "Jari-Jari : $r" ?></a><br>
            <a style="font-size: 24px;"><?= luaskellingkaran($r) ?></a>
            <br>
            <a class="muted-text" style="font-size: 28px;">Penentuan Nilai</a><br>
            <a style="font-size: 24px;"><?= "Nilai = $nilai" ?></a><br>
            <a style="font-size: 24px;">Grade : <?= Nilai($nilai) ?></a> 
            <br>
        </div>
    </div>
</body>
</html>