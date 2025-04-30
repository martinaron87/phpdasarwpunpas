<?php
    // ini adalah komentar
    /* ini adalah komentar jjuga
    tidak akan terbaca oleh program
    */

    // Pertemuan 2 - PHP dasar
    // sintaks php

    // standar ouput (cara php untuk menampilkan sesuatu ke layar)
    // echo; print;
    // print_r
    // var_dump
    // print_r dan var_dump tidak dipakai saat develop web, itu dipakai saat debugging

    // misal
    echo "Martin Aron <br>";
    echo 202243501642;
    echo "<br>";
    echo "boolean true akan menampilkan angka 1, true = ".true; // boolean true akan menampilkan angka 1
    echo "boolean false tidak akan menampilkan apa-apa, false = ".false; // boolean false akan menampilkan kosong
    echo "<br>";
    print "Martin Aron S <br>";
    print 1234567890; // kalau angka tidak perlu di kurung () atau petik dua ""
    echo "<br>";
    echo "untuk menampilkan string seperti tulisan ini, boleh menggunakan echo petik dua atau petik satu.";
    echo '<br>';

    // kalau print_r dan var_dump wajib pakai kurung () dan petik dua, kecuali untuk angka hanya dikurung saja khusus var_dump""
    print_r(value: "Martin Aron Samuel <br>");
    print_r(value: "098765432 <br>");
    var_dump(value: "Saya suka makan daging");
    echo "<br>";
    var_dump(value: 9889754615405);
    echo "<br>";

    // penulisan sintaks php
    // 1. php didalam html
    // 2. html didalam php

    // variabel dan tipe data
    // variabel
    // $nama_variabel = "nilai";
    $nama = "aron"; // kita tidak perlu mendefinisikan tipe_data apa variable nya, langsung kasih nilai aja.

    // operator
    // penggabungan string / concatenation / concat (pakai titik .)
    $nama_depan = "Martin";
    $nama_belakang = "Aron";
    echo $nama_depan." ".$nama_belakang;
    echo "<br>";
    // aritmatika
    // + - * / %
    $a = 10;
    $b = 0;
    echo "10 + 0 = ".($a + $b);
    echo "<br>";
    echo "10 - 0 = ".($a-$b);
    echo "<br>";
    echo "10 / 20 = ".(10 / 20);
    echo "<br>";
    echo "10 mod 90 = ".(10 % 90);
    echo "<br>";

    // operator assingment (penugasan)
    // =, +=, -=, *=, /=, %=, .=
    $x = 1;
    $x %= 5;
    echo $x;
    echo "<br>";

    // operator perbandingan
    // > (lebih beesar dari) 
    // >= (lebih beesar sama dengan dari) 
    // <, 
    // <=, 
    // == (sama dengan) 
    // != (tidak sama dengan)
    echo "1 == 8?";
    var_dump(value: 1 == 8);
    echo "<br>";
    echo "1 == 1?";
    var_dump(value: 1 == "1");
    echo "<br>";

    // operator identitas
    // operator ini tidak hanya mengecek kesamaan nilai, tapi juga mengecek kesamaan tipe data nilainya
    // ===, !==
    echo "1 === 1?";
    var_dump(value:1 === "1");
    echo "<br>";

    // operator logika
    // && dan (and)
    // || atau (or)
    // ! not (bukan)
    $po=90;
    $pe=8;
    echo "apakah ".$po." lebih kecil dari ".$pe."? ";
    var_dump(value:$po < $pe);
    echo "<br>";

    echo "apakah ".$po." lebih kecil dari ".$pe." dan ".$pe." lebih besar sama dengan ".$a."?";
    var_dump(value:$po < $pe && $pe >= $a);
    echo "<br>";

    echo "apakah ".$po." lebih kecil dari ".$pe." atau ".$pe." lebih kecil sama dengan ".$a."?";
    var_dump(value:$po < $pe || $pe <= $a);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>
        tulisan <?php echo $nama;?>, ditampilkan dengan sintak php yang ada didalam tag html h1, cek aja Source code nya
    </h1>

    <h4>
        <?php echo "ini adalah paragraf yang ditulis di php, dan ditampilkan dengan tag h4";?>
    </h4>

    <?php
    echo "<p>ini adalah tag paragraf html, yang dibuat didalam sintaks php </p>"
    ?>
</body>
</html>