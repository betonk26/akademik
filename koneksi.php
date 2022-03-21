<?php 
$koneksi = mysqli_connect("localhost","root","","akademik_db");

// Check connection
if(!$koneksi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>