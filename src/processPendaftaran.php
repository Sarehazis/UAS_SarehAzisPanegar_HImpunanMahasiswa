<?php
session_start();

include 'koneksi.php';

$user = [
    'nim' => $_POST['nim'],
    'nama_pendaftar' => $_POST['nama_pendaftar'],
    'no_tlp' => $_POST['no_tlp'],
];

//username unik. simpan di database.
if ($row != null) {
    $_SESSION['error'] = 'Nim: ' . $user['nim'] . ' yang anda masukkan sudah ada di database.';
    $_SESSION['nama_pendaftar'] = $_POST['nama_pendaftar'];
    $_SESSION['no_tlp'] = $_POST['no_tlp'];
    header("Location: /Himpunan%20Mahasiswa/src/processPendaftaran.php");
    return;
} else {
    //username unik. simpan di database.
    $query = "insert into pendaftaran (nim, nama_pendaftar, no_tlp) values  (?,?,?)";
    $stmt = $mysqli->stmt_init();
    $stmt->prepare($query);
    $stmt->bind_param('sss', $user['nim'], $user['nama_pendaftar'], $user['no_tlp']);
    $stmt->execute();
    $result = $stmt->get_result();
    var_dump($result);

    $_SESSION['message'] = 'Berhasil Daftar sebagai Anggota Hima. Silakan tunggu Konfirmasi, Terima Kasih';
    header("Location: /Himpunan%20Mahasiswa/src/pendaftaran.php");
}
