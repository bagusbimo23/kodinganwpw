<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$Hp = $_POST['hp'];
$asal_Sma = $_POST['asal_Sma'];
$matkulfavorit = $_POST['matkulfavorit'];

echo $nama;

// update data ke database
$sql = mysqli_query($koneksi, "update mahasiswa set nrp='$nrp', nama='$nama', jenis_kelamin='$jenis_kelamin',jurusan='$jurusan',email='$email',alamat='$alamat',Hp='$Hp',asal_Sma='$asal_Sma',matkulfavorit='$matkulfavorit' where id='$id'");

// mengalihkan halaman kembali ke index.php


if($sql){
    header("location:index.php");;
}else{
    echo "data gagal";
}

?>