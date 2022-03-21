<?php include '../template/header.php'; ?>

    <title>User - Akademik Website 1.0</title>
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
        <div class="page-mahasiswa">
            <table border=1; class="table-view">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        include '../koneksi.php';
                        $i = 1;
                        // $data = mysqli_query($koneksi, "SELECT nama FROM mahasiswa WHERE id = 123 LIMIT 1");
                        // while($d = mysqli_fetch_array($data)){
                        // $r = mysqli_fetch_fields($data)
                        ?>
                        <td><?= $i++; ?></td>
                        <td><?= $_SESSION['nama'] ?></td>
                        <!-- <td>
                            <a href=""><i class='bx bxs-edit'></i></a>
                            <a href=""><i class='bx bxs-trash'></i></a>
                        </td> -->
                    </tr>
                    <?php //} ?>
                </tbody>
            </table>
        </div>
        <?php include '../template/footer.php'; ?>
    </div>

</body>
</html>