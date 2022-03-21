<?php include '../template/header.php'; ?>

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
            <table border=1; class="table-view">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Jumlah SKS</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        include '../koneksi.php';
                        $i = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM matkul");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                        <td><?= $i++; ?></td>
                        <td><?= $d['kode']; ?></td>
                        <td><?= $d['nama_mk']; ?></td>
                        <td><?= $d['sks']; ?></td>
                        <td><?= $d['semester']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>


    </div>
</div>
<?php include '../template/footer.php'; ?>
</body>
</html>