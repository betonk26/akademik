<?php include '../template/header.php'; ?>
<link rel="stylesheet" href="style_dosen.css">
    <title>Dosen - Akademik Website 1.0</title>
</head>
<?php 
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['role']==""){
	header("location:../index.php?alert=belum_login");
}
?>
<?php 
    if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<script>alert('gagal! id sudah ada!'); history.back(self); </script>";
		}else if($_GET['pesan'] == "berhasil"){
			echo "<script>alert('anda telah berhasil menginput anggota'); </script>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "login untuk mengakses halaman admin";
	    }
    }
?>
<body>
    <div class="container">
        <?php include '../template/menu_1.php'; ?>
        <div class="page-mahasiswa">
            <!-- <a href="" class="btn-add"><i class='bx bx-plus-medical'></i>tambah data</a> -->
            <table border="1" class="table-view">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>No Telpon</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        include '../koneksi.php';
                        $i = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                        <td><?= $i++; ?></td>
                        <td><?= $d['id']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['telp']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>



        </div>
    </div>
    <?php include '../template/footer.php'; ?>


</body>
</html>