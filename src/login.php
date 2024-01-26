<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<title>Login Admin dan Anggota</title>
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
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
			if (isset($_SESSION['logout'])) {
			?>
				<div class="alert alert-success" role="alert">
					<?php echo $_SESSION['logout'] ?>
				</div>
			<?php
			}
			?>
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<h1>Logo</h1>
					</div>
					<div class="card shadow-lg">
						<form action="process.php" method="post">
							<div class="card-body p-5">
								<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="text">Username</label>
									<input id="username" type="text" class="form-control" name="username" aria-describedby="username" placeholder="Username" autocomplete="off">
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
									</div>
									<input id="password" type="password" class="form-control" name="password" placeholder="Password">
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>

								<div class="d-flex align-items-center">
									<button type="submit" class="btn btn-primary">
										Login
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<?php
session_destroy();
?>