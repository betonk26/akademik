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
        <?php include '../template/menu.php'; ?>
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
                        <th>Action</th>
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
                        <td>
                            <a href="#"><i class='bx bxs-edit'></i></a>
                            <a href="#"><i class='bx bxs-trash'></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        
        <!-- <?php
        $sql = "SELECT * FROM matkul WHERE id";

        $x = $koneksi->prepare($sql);
        $x->execute();
        $x->bind_result($id,$nama_mk,$sks,$semester);
        $x->fetch();
        ?> -->
        <div class="form-tambah">
            <form action="matkul_add.php" method="post">
                <table>
                <tr>
                    <td><label>Kode</label></td>
                    <td><input type="text" name="kode" class="form-input"></td>
                </tr>
                <tr>
                    <td><label>Nama Mata Kuliah</label></td>
                    <td><input type="text" name="nama_mk" id="" class="form-input"></td>
                </tr>
                <tr>
                    <td><label>Jumlah SKS</label></td>
                    <td><input type="number" name="sks" id="" class="form-input"></td>
                </tr>
                <tr>
                    <td><label>Semester</label></td>
                    <td><input type="number" name="semester" id="" class="form-input"></td>
                </tr>
                <tr>
                    <td><label></label></td>
                    <td></td>
                </tr>
            </table>
            <input type="submit" value="Tambah Data" class="btn-input">
            </form>
        </div>


    </div>
</div>
<?php include '../template/footer.php'; ?>
</body>
</html>