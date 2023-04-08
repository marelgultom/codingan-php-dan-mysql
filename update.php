<?php
include('koneksi.php');

$no= $_POST['no'];
$nama = $_POST ['nama'];
$email = $_POST['email'];
$handphone= $_POST['handphone'];

// echo $nama . '<br>';
// echo $email . '<br>';
// echo $handphone . '<br>';

$update = mysqli_query($koneksi,"UPDATE data SET nama='$nama',email='$email',
handphone='$handphone'WHERE no='$no'");

if($update == TRUE) {
    echo "Berhasil Terupdat ke Database";
    header('location: data.php');
}else {
    echo "Gagal Terupadate ke database";
}
