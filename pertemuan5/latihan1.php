<?php 
    // array
    // variabel yang dapat memiliki banyak nilai
    // array adalah pasangan antara key dan valuenya
    // key-nya adalah index yang dimulai dari 0


    // membuat array 
    // cara lama
    $hari = array("senin", "selasa", "rabu");
    // cara baru
    $bulan = ['Januari', 'februari', 'maret'];
    // element array boleh diisi dengan beda tipe data
    $arr1 = [123, "tulisan", false];

    // menampilkan array
    // var_dump() dan print_r()
    // var_dump(($hari));
    // echo "\n";
    // print_r($bulan);

    // menampilkan 1 elemen pada array
    // echo "$arr1[1]\n";
    // echo $bulan[1];

    // menambah elemen baru pada array
    // misal, mau menambahkan kamis ke array hari
    $hari[] = "sunday";
    $hari[] = "jum'at";
    var_dump($hari);





?>