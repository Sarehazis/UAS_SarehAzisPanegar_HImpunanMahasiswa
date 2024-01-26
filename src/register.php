<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Register Member - PHP</title>
</head>

<body>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4 mt-5">

				<?php
				if (isset($_SESSION['error'])) {
				?>
					<div class="alert alert-warning" role="alert">
						<?php echo $_SESSION['error'] ?>
					</div>
				<?php
				}
				?>

				<?php
				if (isset($_SESSION['message'])) {
				?>
					<div class="alert alert-success" role="alert">
						<?php echo $_SESSION['message'] ?>
					</div>
				<?php
				}
				?>


				<div class="card ">
					<div class="card-title text-center">
						<h1>Register Form</h1>
					</div>
					<div class="card-body">
						<form action="process-register.php" method="post">
							<div class="form-group">
								<label for="username">Nama Lengkap</label>
								<input type="text" name="nama" class="form-control" id="name" value="<?php echo @$_SESSION['nama'] ?>" aria-describedby="name" placeholder="Nama lengkap" autocomplete="off" required>

							</div>
							<div class="form-group">
								<label for="username">Nim</label>
								<input type="text" name="nim" class="form-control" id="nim" value="<?php echo @$_SESSION['nim'] ?>" aria-describedby="name" placeholder="Nim" autocomplete="off">

							</div>
							<div class="form-group">
								<label for="username">No Telpon</label>
								<input type="text" name="no_tlp" class="form-control" id="no_tlp" value="<?php echo @$_SESSION['no_tlp'] ?>" aria-describedby="name" placeholder="No Telpon" autocomplete="off">

							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username" value="<?php echo @$_SESSION['username'] ?>" aria-describedby="username" placeholder="username" autocomplete="off">

							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" value="<?php echo @$_SESSION['password'] ?>" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="password">Konfirmasi Password</label>
								<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation'] ?>" placeholder="Password">
							</div>

							<button type="submit" class="btn btn-primary">Register</button>
						</form>

					</div>
				</div>
			</div>

		</div>

	</div>
</body>


<?php

if (isset($_POST['submit'])) {
	include "koneksi.php";

	$nama = $_POST['nama'];
	$nimm = $_POST['nim'];
	$nohp = $_POST['no_tlp'];
	$users = $_POST['username'];
	$passs = $_POST['password'];

	$regist = mysqli_query($mysqli, "INSERT INTO users VALUES(null, '" . $nama . "', '" . $nimm . "', '" . $nohp . "', '" . $users . "', '" . $passs . "')");


	if ($regist) {
		echo '<script>alert("Data Berhasil Ditambahkan")</script>';
		echo '<script>window.location="dashboard.php</script>';
	} else {
		echo "Data Gagal DiMasukkan" . mysqli_error($mysqli);
	}
}
?>


<?php
session_destroy();
?>