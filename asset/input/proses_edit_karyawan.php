<?php
include "../../koneksi.php";

$id_karyawan = $_POST['id_karyawan'];
$id_jabatan = $_POST['id_jabatan'];
$nama_karyawan = $_POST['nama_karyawan'];
$jk = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$pendidikan = $_POST['pendidikan'];
$tgl_mulai_kerja = $_POST['tgl_mulai_kerja'];
$status_karyawan = $_POST['status_karyawan'];
$email = $_POST['email'];
$no_rek = $_POST['no_rek'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];


if ($foto) {
    // Set path file upload
    $path = "../../gambar/foto/".$foto;

    // Upload file
    move_uploaded_file($tmp, $path);

    // Update data karyawan dengan foto baru
    $sql = "UPDATE karyawan SET id_karyawan='$id_karyawan', id_jabatan='$id_jabatan', nama_karyawan='$nama_karyawan', jk='$jk', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', agama='$agama', alamat='$alamat', no_telp='$no_telp', pendidikan='$pendidikan', status_karyawan='$status_karyawan', email='$email', no_rek='$no_rek', foto='$foto' WHERE id_karyawan='$id_karyawan'";
} else {
    // Update data karyawan tanpa foto baru
    $sql = "UPDATE karyawan SET id_karyawan='$id_karyawan', id_jabatan='$id_jabatan', nama_karyawan='$nama_karyawan', jk='$jk', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', agama='$agama', alamat='$alamat', no_telp='$no_telp', pendidikan='$pendidikan', status_karyawan='$status_karyawan', email='$email', no_rek='$no_rek' WHERE id_karyawan='$id_karyawan'";
}

if (mysqli_query($koneksi, $sql)) {
    header("location:../tampilan/data_karyawan_admin.php");
} else {
    echo "Terjadi kesalahan: " . mysqli_error($conn);
}

mysqli_close($conn);
?>