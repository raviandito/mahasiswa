<?php
include('../koneksi.php');
$edit = mysqli_query($koneksi, "SELECT * FROM prodi WHERE id=$_GET[id]");
$data = mysqli_fetch_array($edit);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<h2 style="margin: 30px;">Ubah Data Prodi</h2>

<div class="form-wrapper" style="margin : 100px auto; max-width : 800px; border : 1px solid #dee2e6; border-radius: 16px; padding: 40px; box-shadow: 0 8px 20px rgba(0,0,0,0.08);" >
    <form method="post" action="" style="margin: 30px;">

    <div class="mb-3">
        <label for="nama_prodi" class="form-label">Nama Prodi</label>
        <input type="text" class="form-control" name="nama_prodi" required>
    </div>
    <div class="mb-3">
        <label for="jenjang" class="form-label">Jenjang</label>
        <select name="jenjang" id="" class="form-control">
            <option value="" disabled selected style="width: 100px;">-- Pilih Jenjang --</option>
            <option value="D2">D2</option>
            <option value="D3">D3</option>
            <option value="D4">D4</option>
            <option value="S2">S2</option>
        </select>

    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" name="keterangan" required>
    </div>
    <div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="reset" name="reset" class="btn btn-primary">reset</button>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</form>

<?php
if (isset($_POST['submit'])) {
    $update = mysqli_query($koneksi, "UPDATE prodi SET nama_prodi='$_POST[nama_prodi]', jenjang='$_POST[jenjang]', keterangan='$_POST[keterangan]' WHERE id = $_GET[id]");
    if ($update) {
        header("Location: list.php");
    } else {
        echo "edit data gagal";
    }
}
?>