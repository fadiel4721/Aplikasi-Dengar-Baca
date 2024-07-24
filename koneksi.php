<?php
$koneksi = @mysqli_connect('localhost', 'root', '', 'baca');

if (!$koneksi) {
    die("mysqli_error: " . mysqli_connect_error());
} else {
    // echo"Koneksi sukses";
}
