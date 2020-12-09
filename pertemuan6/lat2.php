<?php
if ( !isset($_GET["Nama"])|| 
     !isset($_GET["alamat"]) || 
     !isset($_GET["Gambar"]) ||
     !isset($_GET["Email"])) 
     {
        # redirect
        header("Location: lat1.php");
        exit;
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Alamat</title>
    <style>
        .kotak
            {
                width: 30px;
                height: 30px;
                background-color: #BADA55;
                text-align: center;
                margin: 3px;
                line-height: 30px;
                float: left;
                transition: 1s;
            }
            .kotak:hover
            { transform: rotate(360deg) ; 
                border-radius: 50%;
            }
            .clear{clear: both;}
    </style>
</head>
<body>



<ul>
            <li><img src="gbr/<?= $_GET["Gambar"]; ?>"></li>
            <li><?= $_GET["Nama"]; ?></li>
            <li><?= $_GET["alamat"]; ?></li>
            <li><?= $_GET["Email"]; ?></li>
</ul>

<a href="lat1.php"> Kembali Kehalam Login </a>
    
</body>
</html>