<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Aplikasi CRUD dengan PHP</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="w-50">
            <p class="h1 text-center mt-3">Tambah Data Siswa</p>
            <form method="post" action="proses_simpan.php" enctype="multipart/form-data" class="mt-5">
                <div class="mb-3">
                    <label for="NIS" class="form-label">NIS</label>
                    <input type="text" class="form-control" id="NIS" name="nis">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="nama">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="male" value="Laki-laki">
                    <label class="form-check-label" for="male">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="female" value="Perempuan">
                    <label class="form-check-label" for="female">Perempuan</label>
                </div>
                <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">Telepon</label>
                    <input type="tel" class="form-control" id="phone" name="telp">
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Your address" id="address" name="alamat"></textarea>
                    <label for="address">Alamat</label>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="photo" name="foto">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="index.php" type="button" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>