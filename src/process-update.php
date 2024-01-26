<?php

session_start();

include "koneksi.php";

//dapatkan data user dari form
$user = [
    'id' => $_GET['id'],
    'username' => $_POST['username'],
    'nama' => $_POST['nama'],
];

$query = "UPDATE `users` SET `username`= ?, `nama`=? WHERE `id`= ?";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('sss', $user['username'], $user['nama'], $user['id']);

$stmt->execute();

header("Location: index.php");
$_SESSION['message'] = 'Berhasil mengubah data.';
