<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data tabel mahasiswa</title>
</head>

<body>


    <a href="edit_profil.php ?id=<?= $data['id']; ?> " class="fs-3 text-primary">
        <button type="button" class="btn btn-primary" style="padding:10px; margin: 30px 0 30px 70px; border-radius: 10px;"><i class="bi bi-plus-square"></i> Edit Profil</button>
    </a>


    <table border="1" cellpadding="10" cellspacing="0" style="text-align: center; margin: 100px 0 0 380px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <?php
        include('koneksi.php');

        $tampil = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');
        $no = 1;
        while ($data = mysqli_fetch_array($tampil)) {
        ?>

            <tbody>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["nim"] ?></td>
                    <td><?php echo $data['nama_mhs']; ?></td>
                    <td><?php echo $data['tgl_lahir']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><button type="Edit" name="edit" style="background-color: #00d3bb; margin-right: 12px; width: 50px; border-radius: 6px;"><a href="./mahasiswa1/update.php?id=<? echo $data['nim'] ?>" style="text-decoration: none; color:#1d232a;">Edit</a></button>
                        |<button type="Delete" name="delete" style="background-color: #00d3bb; margin-left: 12px; border-radius: 6px;"><a href="./mahasiswa1/hapus.php ?id=<? echo $data['nim'] ?>" style="text-decoration: none; color:#1d232a;">Hapus</a></button></td>
                </tr>
            </tbody>
        <?php
            $no++;
        }
        ?>
    </table>

    <a href="mahasiswa1/proses.php" style="margin-left: 380px; text-decoration: none; color:blue">Input data kembali</a>
</body>

</html>