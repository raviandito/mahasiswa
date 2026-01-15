<?php
include('koneksi.php');
$id = $_GET['id'];

$query = "SELECT * FROM mahasiswa WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}

$data = mysqli_fetch_array($result);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<h2 style="margin: 30px;">Edit Profil</h2>



<div class="form-wrapper" style="margin : 100px auto; max-width : 800px; border : 1px solid #dee2e6; border-radius: 16px; padding: 40px; box-shadow: 0 8px 20px rgba(0,0,0,0.08);">
    <form method="post" action="" style="margin: 30px;">

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" required style="width: 50%;">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" required style="width: 50%;">

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?= $data['email']; ?>" readonly style="width: 50%;">
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
    $update = mysqli_query($koneksi, "UPDATE user SET username='$_POST[username]', password='$_POST[password]' WHERE id=$_GET[id]");
    if ($update) {
        header("Location: index.php");
    } else {
        echo "edit data gagal";
    }
}
?>