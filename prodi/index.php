<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data tabel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <a href="proses.php" class="fs-3 text-primary">
        <button type="button" class="btn btn-primary" style="padding:10px; margin: 30px 0 30px 70px; border-radius: 10px;"><i class="bi bi-plus-square"></i> Tambah Data</button>
    </a>
    <div style="padding: 16px; margin : 50px;">
        <table border="1" class="table">
            <thead style="background-color: gray;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama prodi</th>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
            include('../koneksi.php');
            $tampil = mysqli_query($koneksi, 'SELECT * FROM prodi');
            $no = 1;
            while ($data = mysqli_fetch_array($tampil)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data["nama_prodi"] ?></td>
                        <td><?php echo $data['jenjang']; ?></td>
                        <td><?php echo $data['keterangan']; ?></td>
                        <td><button type="button" class="btn btn-success"><a href="update.php?id=<?php echo $data['id'] ?>" style="text-decoration: none; color:white;">Edit</a></button>
                            <button type="button" class="btn btn-danger"><a href="hapus.php?id=<?php echo $data['id'] ?>" style="text-decoration: none; color:white ;">Hapus</a></button>
                        </td>
                    </tr>
                </tbody>
            <?php
                $no++;
            }
            ?>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>