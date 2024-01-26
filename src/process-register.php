<?php
session_start();

include "koneksi.php";

//dapatkan data user dari form register
$user = [
    'nama' => $_POST['nama'],
    'nim' => $_POST['nim'],
    'no_tlp' => $_POST['no_tlp'],
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'password_confirmation' => $_POST['password_confirmation'],
];

//validasi jika password & password_confirmation sama

if ($user['password'] != $user['password_confirmation']) {
    $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['nim'] = $_POST['nim'];
    $_SESSION['no_tlp'] = $_POST['no_tlp'];
    $_SESSION['username'] = $_POST['username'];
    header("Location: /Himpunan%20Mahasiswa/src/register.php");
    return;
}

//check apakah user dengan username tersebut ada di table users
$query = "select * from users where username = ? limit 1";
$stmt = $mysqli->stmt_init();
$stmt->prepare($query);
$stmt->bind_param('s', $user['username']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

//jika username sudah ada, maka return kembali ke halaman register.
if ($row != null) {
    $_SESSION['error'] = 'Username: ' . $user['username'] . ' yang anda masukkan sudah ada di database.';
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['nim'] = $_POST['nim'];
    $_SESSION['no_tlp'] = $_POST['no_tlp'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['password_confirmation'] = $_POST['password_confirmation'];
    header("Location: /Himpunan%20Mahasiswa/src/register.php");
    return;
} else {
    //hash password
    $password = password_hash($user['password'], PASSWORD_DEFAULT);

    //username unik. simpan di database.
    $query = "insert into users (nama, nim, no_tlp , username, password) values  (?,?,?,?,?)";
    $stmt = $mysqli->stmt_init();
    $stmt->prepare($query);
    $stmt->bind_param('sssss', $user['nama'], $user['nim'], $user['no_tlp'], $user['username'], $password);
    $stmt->execute();
    $result = $stmt->get_result();
    var_dump($result);

    $_SESSION['message'] = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
    header("Location: /Himpunan%20Mahasiswa/src/register.php");
}
