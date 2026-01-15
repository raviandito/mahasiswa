<?php

include('../koneksi.php');
$hapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim=$_GET[nim]");
if ($hapus) {
    header("Location: ../index.php");
} else {
    echo "data gagal dihapus";
}
