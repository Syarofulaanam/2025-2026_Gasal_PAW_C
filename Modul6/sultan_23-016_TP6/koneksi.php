<?php
$koneksi = mysqli_connect("localhost", "root", "", "store");
if(!$koneksi) {
    die("koneksi gagal: " . mysqli_connect_error());
}