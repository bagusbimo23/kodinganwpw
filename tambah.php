<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi</title>
</head>

<body>

    <h2>CRUD DATA MAHASISWA</h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>TAMBAH DATA MAHASISWA</h3>

    <div class="mx-auto">
        <div class="card">
            <div class="card-header text-white bg-primary">
                Tambah Data
            </div>
            <br>
            <div class="card-body">
                <form method="post" action="tambah_aksi.php">
                    <div class="mb-3 row">
                        <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="nrp">
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jenis_kelamin">
                        </div>
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jurusan">
                        </div>
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email">
                        </div>
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <label for="Hp" class="col-sm-2 col-form-label">Hp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Hp">
                        </div>
                        <label for="asal_Sma" class="col-sm-2 col-form-label">Asal Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="asal_Sma">
                        </div>
                        <label for="matkulfavorit" class="col-sm-2 col-form-label">Mata Kuliah Favorit</label>
                        <div class="col-sm-10 mb-3">
                            <input type="text" class="form-control" name="matkulfavorit">
                        </div>
                        <br>
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary" name="Simpan">
                        </div>
                    </div>
                    <!-- <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="text" name="jenis_kelamin"></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td><input type="text" name="jurusan"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat"></td>
                    </tr>
                    <tr>
                        <td>Nomor Handphone</td>
                        <td><input type="text" name="Hp"></td>
                    </tr>
                    <tr>
                        <td>Asal SMA</td>
                        <td><input type="text" name="asal_Sma"></td>
                    </tr>
                    <tr>
                        <td>Matakuliah Favorit</td>
                        <td><input type="text" name="matkulfavorit"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="SIMPAN"></td>
                    </tr> -->
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>