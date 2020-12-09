<?php 
$maha   =[["Syahril","0536092","Teknik Telekomunikasi",["syahrilsymd@gmail.com",'']], 
["Syahril","0536092","Teknik Telekomunikasi",["syahrilsymd@gmail.com","email 2" ] ] ] ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lat 1 Array</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<?php foreach ($maha as $mh ) : ?>
   
<ul>
    <li><?= $mh[0] ; ?></li>
    <li><?= $mh[1] ; ?></li>
    <li><?= $mh[2] ; ?></li>
    <li><?= $mh[3][1] ; ?></li>
</ul>

<?php endforeach; ?>

</body>
</html>