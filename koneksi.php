<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_akademik";

    $koneksi = mysqli_connect($host, $username, $password, $database);

    if( !$koneksi){
        echo "database berhasli terhubung" . mysqli_connect_error();
    }
?>