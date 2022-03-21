<?php include '../template/header.php'; ?>

    <title>Home - Akademik Website 1.0</title>
    
</head>
<?php 
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['role']==""){
	header("location:../index.php?alert=belum_login");
}
?>

<body>
    <div class="container">
    <?php include '../template/menu_1.php'; ?>
    </div>
    <div class="page-index">
        <h1>Selamat datang <?= $_SESSION['nama'] ?> di website Akademik</h1>
        <p>Website Akademik ini menampilkan Data Mahasiswa, Data Dosen, Mata Kuliah dan Data User</p>
        <p>website ini dibuat dengan bahasa pemograman seperti PHP dan CSS</p>
    </div>
    <?php include '../template/footer.php'; ?>
    
</body>
</html>