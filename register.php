<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
</head>

<body style="margin: 30px;">
    <div>
        <h3>Register Akun</h3>
        <div class="form-wrapper" style="margin : 100px auto; max-width : 800px; border : 1px solid #dee2e6; border-radius: 16px; padding: 40px; box-shadow: 0 8px 20px rgba(0,0,0,0.08);">
            <form method="POST">

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" required >
                </div>
                <div class="mb-3">
                    <label for="password" calss="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>

                </div>
                <div class="mb-3">
                    <label for="password2" calss="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password2" required>

                </div>
                <div class="mb-3">
                    <label for="notelp" class="form-label">Nomor Telepn</label>
                    <input type="text" class="form-control" name="notelp" required >
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>




    </div>

    <?php
    include('koneksi.php');

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], algo: PASSWORD_DEFAULT);
        $password2 = password_hash($_POST['password2'], algo: PASSWORD_DEFAULT);
        $notelp = $_POST['notelp'];
    

        $password_raw = $_POST['password'];
        $password_raw2 = $_POST['password2'];

        if($password_raw !== $password_raw2){
            echo "<script>
                    alert('konfirmasi password tidak sesuai!');
            </script>";
            return false;
        }

        $result = mysqli_query($koneksi, "SELECT username from user where username = '$username' ");

        if(mysqli_fetch_array($result)) {
            echo "<script>
                    alert('akun anda sudah terdaftar');
            </script>";
        }

        $sql = mysqli_query($koneksi, "INSERT INTO user(username, password, notelp)
    VALUES ('$username', '$password', '$notelp')");

        if ($sql) {
            echo "Register berhasil ";
      
        } else {
            echo "input buku tamu gagal";
        }

       
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>