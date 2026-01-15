<?php

include('../koneksi.php');
$hapus = mysqli_query($koneksi, "DELETE FROM prodi WHERE id=$_GET[id]");
if ($hapus) {
    header("Location: list.php");
} else {
    echo "data gagal dihapus";
}
