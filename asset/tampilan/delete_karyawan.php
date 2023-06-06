<?php
include '../../koneksi.php';
extract($_POST);
$id_karyawan = $_GET['id_karyawan'];

$query = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id_karyawan='$id_karyawan'");

header("location:data_karyawan.php");

?>d