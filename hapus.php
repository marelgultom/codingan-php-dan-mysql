<?php
include('koneksi.php');
$no = $_GET['no'];

// echo $no;

$hapus = mysqli_query($koneksi,"DELETE FROM data WHERE no='$no'");
if($hapus == TRUE) {
    echo "Berhasil Terhapus ke Database";
    header('location: data.php');
}else {
    echo "Gagal Terhapus";
}
