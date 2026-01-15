<?php
include('../koneksi.php');
$edit = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim=$_GET[nim]");
$data = mysqli_fetch_array($edit);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<h2 style="margin: 30px;">Ubah Data Mahasiswa</h2>

<div class="form-wrapper" style="margin : 100px auto; max-width : 800px; border : 1px solid #dee2e6; border-radius: 16px; padding: 40px; box-shadow: 0 8px 20px rgba(0,0,0,0.08);">
    <form method="post" action="" style="margin: 30px;">
    
            <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input type="text" class="form-control" name="nim" required  style="width: 50%;">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama" required style="width: 50%;">
                
            </div>
            <div class="mb-3" >
                <label for="tanggal" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal" required style="width: 50%;">
            </div>

            <div class="mb-3" >
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" required style="width: 50%;">
            </div>

    <div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="reset" name="reset" class="btn btn-primary">reset</button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</form>
</div>


<?php
if (isset($_POST['submit'])) {
    $update = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$_POST[nim]', nama_mhs='$_POST[nama]', tgl_lahir='$_POST[tanggal]', alamat='$_POST[alamat]' WHERE nim=$_GET[nim]");
    if ($update) {
        header("Location: ../index.php");
    } else {
        echo "edit data gagal";
    }
}
?>