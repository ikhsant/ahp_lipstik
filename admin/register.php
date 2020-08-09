<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login APP</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" >

</head>
<body style="background-color: lightgrey">
	<div class="card" style="max-width: 400px; margin: auto; margin-top: 100px; background-color: white; padding: 15px">
		<div class="card-body">
			<h3>REGISTER</h3>
			<?php if ($_SESSION['error']): ?>
				<div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
				<?php $_SESSION['error'] = '' ?>
			<?php endif ?>
			<form method="post">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" required class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" required class="form-control">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" required class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" required class="form-control">
			</div>
			<button class="btn btn-success" type="submit" name="submit">REGISTER</button>
			</form>
		</div>
	</div>


<?php  

if (isset($_POST['submit'])) {
	include 'config.php';
	$nama        = $_POST['nama'];
	$email       = $_POST['email'];
	$username    = $_POST['username'];
	$password    = sha1($_POST['password']);
	$akses_level = 'user';

	$query = mysqli_query($koneksi, "INSERT INTO user (nama_user,email,username,password,akses_level) VALUES ('$nama', '$email', '$username', '$password', '$akses_level') ");

	if ($query) {
		$_SESSION['sukses'] = 'Berhasil mendaftar silahkan login';
		header('Location: login.php');
	}else{
		$_SESSION['error'] = 'Gagal mendaftar silahkan coba lagi';
		header('Location: register.php');
	}
}

?>

</body>
</html>