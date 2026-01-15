<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
</head>

<body style="margin: 30px;">

    <?php
    include('../koneksi.php');
    ?>

    <div>
        <h3>Input data Mahasiswa</h3>
        <div class="form-wrapper" style="margin : 100px auto; max-width : 1000px; border : 1px solid #dee2e6; border-radius: 16px; padding: 40px; box-shadow: 0 8px 20px rgba(0,0,0,0.08);">
            <form method="POST">

                <div class="mb-3">
                    <label for="nim" class="form-label">Nim</label>
                    <input type="text" class="form-control" name="nim" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama" required>

                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal" required>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" required>
                </div>

                <div class="mb-3">
                    <label for="prodi_id" class="form-label">Program Studi</label>
                    <select name="prodi_id" id="" class="form-control">
                        <option value="" disabled selected style="width: 100px;">-- Pilih Jenjang --</option>

                        <?php
                        $tampil = mysqli_query($koneksi, 'SELECT * FROM prodi');

                        while ($data = mysqli_fetch_array($tampil)) {
                        ?>
                            <option value="<?php echo $data['id'] ?>"><?php echo $data['nama_prodi'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>


                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>



    </div>

    <?php


    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama_mhs = $_POST['nama'];
        $tgl_lahir = $_POST['tanggal'];
        $alamat = $_POST['alamat'];
        $prodi_id = $_POST['prodi_id'];

        $sql = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim, nama_mhs, tgl_lahir, alamat,prodi_id)
    VALUES ('$nim', '$nama_mhs', '$tgl_lahir', '$alamat', '$prodi_id')");

        if ($sql) {
            echo "data berhasil di input ";

            echo "<br> <a href=../index.php>tampilkan data</a>";
        } else {
            echo "input buku tamu gagal";
            echo "error: ".mysqli_error($koneksi);
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>