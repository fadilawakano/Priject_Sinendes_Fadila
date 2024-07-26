<?php
// Panggil file koneksi database
require_once 'private/conn.php';

// Ambil data dari form
$id             = $_POST['id'];
$hasil_panen = $_POST['hasil_panen'];
$harga = $_POST['harga'];
$nama_wirausaha = $_POST['nama_wirausaha'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

// Query untuk menyimpan data ke database
$query = mysqli_query($koneksi, "UPDATE panen SET $hasil_panen, $harga, $nama_wirausaha, $alamat, $no_hp, WHERE $id");
// $query = "UPDATE panen SET '$hasil_panen', '$harga', '$nama_wirausaha', '$alamat', '$no_hp', WHERE '$id'";
// $result = mysqli_query($koneksi, $query);

if ($query) {
    echo "<script>alert('Data berhasil disimpan'); window.location.href = 'index.php';</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

// Tutup koneksi database
mysqli_close($con);
?>