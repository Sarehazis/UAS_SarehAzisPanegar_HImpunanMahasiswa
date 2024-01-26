<?php
session_start();
include 'koneksi.php';

if (empty($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Login & Logout PHP</title>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-4 offset-md-4  mt-5">

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

                <div class="card">
                    <div class="card-title text-center">
                        <h1>Halaman Admin</h1>
                    </div>
                    <div class="card-body">
                        <p>Hello <?php echo $_SESSION['username'] ?></p>
                        <p>Kamu berhasil ke halaman admin.</p>
                        <center>
                            <a href="logout.php">Logout</a>
                        </center>
                    </div>
                </div>
            </div>

        </div>
        <table>
            <thead>
                <tr>
                    <td>id</td>
                    <td>nama</td>
                    <td>actions</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "select * from users";
                $stmt = $mysqli->stmt_init();
                $stmt->prepare($query);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {

                    $i = 1;
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><a href="edit.php?id=<?= $row['id'] ?>">Edit</a></td>
                        <td><a href="process-delete.php?id=<?= $row['id'] ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>