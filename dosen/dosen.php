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
<body>
    <div class="container">
        <?php include '../template/menu.php'; ?>
        <div class="page-mahasiswa">
            <table border=1; class="table-view">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Dosen</th>
                        <th>Email</th>
                        <th>Program Studi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        include '../koneksi.php';
                        $i = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM dosen");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                        <td><?= $i++; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['email']; ?></td>
                        <td><?= $d['prodi']; ?></td>
                        <td>
                            <a href=""><i class='bx bxs-edit'></i></a>
                            <a href=""><i class='bx bxs-trash'></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include '../template/footer.php'; ?>

</body>
</html>