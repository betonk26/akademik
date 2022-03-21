<!-- <?php 
    include 'koneksi.php';
    ?> -->
    <nav class="nav-item">
        <ul class="nav-menu">
            <a href="index.php">Home</a>
            <a href="mahasiswa.php">Data Mahasiswa</a>
            <a href="matkul.php">Mata Kuliah</a>
            <a href="user.php">Data User</a>
        </ul>
            <p>Hello <b><?= $_SESSION['nama'] ?></b></p> 
                <a href="../logout.php" class="btn-logout">Logout</a>
        </div>
    </nav>