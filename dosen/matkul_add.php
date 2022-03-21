<?php
include '../koneksi.php';
    $a  = $_POST['id'];
    $b  = $_POST['kode'];
    $c  = $_POST['nama_mk'];
    $d  = $_POST['sks'];
    $e  = $_POST['semester'];

    $sql    = "INSERT INTO matkul (id,kode,nama_mk,sks,semester) VALUES ('$a', '$b', '$c', '$d','$e')";

    $query  = mysqli_query($koneksi, $sql);

    $cek    = mysqli_num_rows($query);

    if($cek){
        header("location:matkul.php?pesan=gagal");
        }
    else{
        header("location:matkul.php");
        }
?>