<?php 
    include 'template/header.php';
?>
<title>Login - Akademik Website 1.0</title>
<?php
	if(isset($_GET['alert'])){
		if($_GET['alert']=="gagal"){
			echo "<script>alert('Maaf! Username & Password Salah.')</script>";
		}else if($_GET['alert']=="belum_login"){
			echo "<script>alert('Harus login terlebih dahulu!')</script>";
		}else if($_GET['alert']=="logout"){
			echo "<script>alert('Anda telah Logout!')</script>";
		}
	}
?>

<body>
    <div class="card">
        <div class="card-content">
            <div class="card-title">
                <h2>LOGIN</h2>
            </div>
            <form action="cek_login.php" method="post">
                <label for="">Username</label><br>
                <input type="text" class="card-form" name="username" id="username" required><br>
                <label>password</label><br>
                <input type="password" class="card-form" name="password" id="password" required><br>
                <input type="submit" value="LOGIN" class="card-btn">
            </form>
        </div>
    </div>
    
</body>
</html>