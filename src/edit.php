<?php
session_start();
if (empty($_SESSION['login']) || $_SESSION['login'] != true) {
    header("Location: login.php");
}

include 'koneksi.php';
$query = "select * from users where id = ? limit 1";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('s', $_GET['id']);

$stmt->execute();

$result = $stmt->get_result();

$row = $result->fetch_array(MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Edit Member - PHP</title>
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
                        <h1>Edit Form</h1>
                    </div>
                    <div class="card-body">
                        <form action="process-update.php?id=<?= $_GET['id'] ?>" method="post">
                            <div class="form-group">
                                <label for="username">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="name" value="<?php echo @$row['nama'] ?>" aria-describedby="name" placeholder="Nama lengkap" autocomplete="off">

                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" value="<?php echo @$row['username'] ?>" aria-describedby="username" placeholder="username" autocomplete="off">

                            </div>


                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>