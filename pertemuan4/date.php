<?php

//echo date("l, d-M-Y <br>");

// detik yang berlalu dari sejak 1 januari
//echo date("d M Y", time()+60*60*24*100 );

//echo date("d M Y", time()+60*60*24*100 );

//echo time();
//mktime membuat detik sendiri detik
// jam, menit , detik, bulan , tanggal, tahun
//echo date("l", mktime(0,0,0,9,28,1987));

//strtotime
echo date("l", strtotime("28 sep 1987"));


?>