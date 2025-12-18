<?php

include('../koneksi.php');
$hapus = mysqli_query($koneksi, "DELETE FROM prodi WHERE id=$_GET[id]");
if ($hapus) {
    header("Location: index.php");
} else {
    echo "data gagal dihapus";
}
