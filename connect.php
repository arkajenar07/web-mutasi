<?php
$host = mysqli_connect("localhost", "root", "");

if($host){
    echo "KONEKSI BERHASIL :)"."<br>";
} else {
    echo "KONEKSI GAGAL :("."<br>";
}

$db = mysqli_select_db($host,"mutasi_sekolah");

if($db){
    echo "db connected"."<br>";
} else {
    echo "db not connected"."<br>";
}
