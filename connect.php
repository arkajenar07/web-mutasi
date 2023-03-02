<?php
$koneksi = mysqli_connect("localhost", "root", "");

if($koneksi){
    echo "KONEKSI BERHASIL :)"."<br>";
} else {
    echo "KONEKSI GAGAL :("."<br>";
}

$db = mysqli_select_db($koneksi,"mutasi_sekolah");

if($db){
    echo "db connected"."<br>";
} else {
    echo "db not connected"."<br>";
}
