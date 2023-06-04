<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <p class="h1 text-center mt-3">Data Siswa</p>
        <a href="form_simpan.php" class="btn btn-primary mt-5">Tambah Data</a>
        <a href="proses_pdf.php" class="btn btn-primary mt-5">PDF</a>

        <table class="table table-secondary table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $sql = $pdo->prepare("SELECT * FROM siswa");
                $sql->execute();

                while ($data = $sql->fetch()) {
                    echo "<tr>";
                    echo "<td><img src='images/" . $data['foto'] . "' width='100' height='100' class='img-thumbnail' alt='foto'></td>";
                    echo "<td>" . $data['nis'] . "</td>";
                    echo "<td>" . $data['nama'] . "</td>";
                    echo "<td>" . $data['jenis_kelamin'] . "</td>";
                    echo "<td>" . $data['telp'] . "</td>";
                    echo "<td>" . $data['alamat'] . "</td>";
                    echo "<td><a href='form_ubah.php?id=" . $data['id'] . "' class='btn btn-warning'>Ubah</a></td>";
                    echo "<td><a href='proses_hapus.php?id=" . $data['id'] . "' class='btn btn-danger'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>