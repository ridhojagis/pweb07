<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB1', 'daerah');

    // Buat koneksinya
    $db1 = new mysqli(HOST, USER, PASS, DB1);

    if($db1->connect_error){
        die("Koneksi gagal");
    } else {
        echo "Koneksi berhasil";
    }
?>