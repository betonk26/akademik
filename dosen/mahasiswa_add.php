<?php
include '../koneksi.php';
    $a  = $_POST['id'];
    $b  = $_POST['nama'];
    $c  = $_POST['telp'];
    $d  = $_POST['alamat'];

    $sql    = "INSERT INTO mahasiswa (id,nama,telp,alamat) VALUES ('$a', '$b', '$c', '$d')";

    $query  = mysqli_query($koneksi, $sql);

    $cek    = mysqli_num_rows($query);

    if($cek){
        header("location:mahasiswa.php?pesan=gagal");
        }
    else{
        header("location:mahasiswa.php?pesan=berhasil");
        }
?>