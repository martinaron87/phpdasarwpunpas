<?php 
    // date, untuk menampilkan tanggal dengan format tertntu
    // echo date("l,d-M-Y");
    // cek referensinya ada apa aja format tanggal di php

    // time
    // unix timestamp / epoch time
    // detik yang sudah berlalu sejak 1 januari 1970
    // jadi yang tampil kalo cuma echo time() itu adalah detik yang sudah berlalu sejak 1 januari 1970
    // echo time();
    // echo date("d M Y", time()+60*60*24*100);

    // mktime, membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,10, 8,2003));
    
    // strtotime
    // echo date("l", strtotime("23 Jun 2012"));

    // String, strlen(), strcmp(), explode(), htmlspecialchars()

    // utility, var_dump(), isset(), empty(), die(), sleep()
?>

<?php 
    // user-defined function
    // definisikan fungsi di awal program.
    function salam($waktu, $nama): string{
        return "Selamat $waktu, $nama!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam(waktu: "pagi", nama: "Martin"); ?></h1>
</body>
</html>