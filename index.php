<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>


<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                CRUD PHP
            </a>
        </div>
    </nav>

    <!--Judul-->
    <figure class="text-center">
        <h1 class="mt-3">Data Mahasiswa</h1>
        <blockquote class="blockquote">
            <p>Tugas PHP dan MySQLi</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Data Mahasiswa <cite title="Source Title">Politeknik Elektronika Negeri Surabaya </cite>
        </figcaption>


    </figure>

    <div class="container">
        <div class="d-grid gap-2 col-4 mx-auto">
            <a class="btn btn-primary" href="tambah.php">
                <center>Tambah Mahasiswa</center>
            </a>
        </div>

        <br />
        <br />
        <div class="container">
            <table class="table table align-middle table-bordered table-hover m-3">
                <tr class="table-primary">
                    <th>
                        <center>NO</center>
                    </th>
                    <th>
                        <center>NRP</center>
                    </th>
                    <th>
                        <center>Nama</center>
                    </th>
                    <th>
                        <center>Jenis Kelamin<center>
                    </th>
                    <th>
                        <center>Jurusan</center>
                    </th>
                    <th>
                        <center>Email</center>
                    </th>
                    <th>
                        <center>Alamat Domisili</center>
                    </th>
                    <th>
                        <center>Nomor Handphone</center>
                    </th>
                    <th>
                        <center>Asal SMA<center>
                    </th>
                    <th>
                        <center>Mata Kuliah Favorit</center>
                    </th>
                    <th>
                        <center>OPSI</center>
                    </th>
                </tr>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "select * from mahasiswa");
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $d['nrp']; ?>
                        </td>
                        <td>
                            <?php echo $d['nama']; ?>
                        </td>
                        <td>
                            <?php echo $d['jenis_kelamin']; ?>
                        </td>
                        <td>
                            <?php echo $d['jurusan']; ?>
                        </td>
                        <td>
                            <?php echo $d['email']; ?>
                        </td>
                        <td>
                            <?php echo $d['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $d['Hp']; ?>
                        </td>
                        <td>
                            <?php echo $d['asal_Sma']; ?>
                        </td>
                        <td>
                            <?php echo $d['matkulfavorit']; ?>
                        </td>
                        <td>
                            <a class="btn btn-success btn-sm"href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                            <a class="btn btn-danger btn-sm" href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>