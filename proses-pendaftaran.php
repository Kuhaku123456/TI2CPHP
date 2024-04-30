<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
// ambil data dari formulir
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$usia = $_POST['usia'];
$jk = $_POST['jenis_kelamin'];
$telepone = $_POST['telepone'];
// buat query
$sql = "INSERT INTO catatan (nama, tempat, usia, jenis_kelamin, telepone)
VALUE ('$nama', '$tempat', '$usia', '$jk', '$telepone')";
$query = mysqli_query($db, $sql);
// apakah query simpan berhasil?
if( $query ) {
// kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: index.php?status=sukses');
} else {
// kalau gagal alihkan ke halaman indek.php dengan status=gagal
    header('Location: index.php?status=gagal');
}
} else {
    die("Akses dilarang...");
}
?>