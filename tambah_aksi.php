<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$Hp = $_POST['Hp'];
$asal_Sma = $_POST['asal_Sma'];
$matkulfavorit = $_POST['matkulfavorit'];


// menginput data ke database
mysqli_query($koneksi, "insert into mahasiswa values('','$nrp','$nama','$jenis_kelamin','$jurusan','$email','$alamat','$Hp','$asal_Sma','$matkulfavorit')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>