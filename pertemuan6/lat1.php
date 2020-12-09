<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak {
        width: 30px;
        height: 30px;
        background-color: #BADA55;
        text-align: center;
        margin: 3px;
        line-height: 30px;
        float: left;
        transition: 1s;
    }

    .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }

    .clear {
        clear: both;
    }
    </style>
</head>
<?php
    $_dtkam = [
                ["Nama"=>"Syahril Syamsuddin",
                "alamat"=>"BPS BLOK H1 No.21",
                "Gambar"=>"1a.png","Email"=> "syahril210@gmail.com"],
                
                ["Nama"=>"Naila Zahra",
                "alamat"=>"BPS BLOK H1 No.20",
                "Gambar"=> "1b.png","Email"=> "nzf210@gmail.com"]
                
                ]
?>

<body>
<h1>Data Alamat Kampung</h1>
<ul>
<?php foreach ( $_dtkam as $k ) : ?>
    <li>
        <a href="lat2.php?Nama=<?= $k["Nama"]; ?>
        &alamat=<?= $k["alamat"]; ?>
        &Gambar=<?= $k["Gambar"]; ?> &Email=<?= $k["Email"]; ?>">
        <?= $k["Nama"]; ?></a>
    </li>
<?php endforeach ?>
</ul>
</body>

</html>