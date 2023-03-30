<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi</title>
</head>

<body>

    <h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA MAHASISWA</h3>
    
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from mahasiswa where id='$id'");
    
    while ($d = mysqli_fetch_array($data)) {
        ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>NRP</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nrp" value="<?php echo $d['nrp']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>Nomor Handphone</td>
                    <td><input type="text" name="hp" value="<?php echo $d['Hp']; ?>"></td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td><input type="text" name="asal_Sma" value="<?php echo $d['asal_Sma']; ?>"></td>
                </tr>
                <tr>
                    <td>Mata Kuliah Favorit</td>
                    <td><input type="text" name="matkulfavorit" value="<?php echo $d['matkulfavorit']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

</body>

</html>