<?php
$server="localhost";
$user="root";
$password="";
$nama_db="Formulir";

$koneksi =mysqli_connect($server,$user,$password,$nama_db);


if($koneksi== TRUE){
    echo " ";
}else {
    echo "Gagal Terhubung";
}

?>
