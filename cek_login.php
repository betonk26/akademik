<?php
    // mengaktifkan session
    session_start();
    // menghubungkan koneksi ke database
    include 'koneksi.php';
    // menangkap data yang dikirim dari form index.php
    $user   = $_POST['username'];
    $pass   = md5($_POST['password']);
    // menyeleksi data user dengan username dan password yang sesuai
    $sql    = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user' AND password='$pass'");
    // menghitung jumlah data yang ditemukan
    $cek    = mysqli_num_rows($sql);

    // mengecek apakah username dan password ada pada database
    if($cek > 0){
        $data   = mysqli_fetch_assoc($sql);
        // mengecek jika user login sebagai dosen
        if($data['role']=="dosen"){
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['role'] = "dosen";
            // mengalihkan ke halaman dosen
            header("location:dosen/index.php");
        }
        // mengecek jika user login sebagai mahasiswa
        else if($data['role']=="mahasiswa"){
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['role'] = "mahasiswa";
            // mengalihkan ke halaman mahasiswa
            header("location:mahasiswa/index.php");
        }
        // mengalihkan alihkan ke halaman login kembali
        else{
            header("location:index.php?alert=gagal");
        }
    }
    // mengalihkan alihkan ke halaman login kembali
    else{
        header("location:index.php?alert=gagal");
    }
?>