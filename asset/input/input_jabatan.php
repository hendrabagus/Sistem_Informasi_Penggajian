<?php
  // include file koneksi
  include "../../koneksi.php";

  // cek apakah form telah di-submit
  if($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // ambil data dari form
    $id_jabatan = $_POST["id_jabatan"];
    $nama_jabatan = $_POST["nama_jabatan"];
    $gaji_pokok = $_POST["gaji_pokok"];
    
    // query untuk menyimpan data ke database
    $query = "INSERT INTO jabatan (id_jabatan,nama_jabatan, gaji_pokok) VALUES ('$id_jabatan','$nama_jabatan', '$gaji_pokok')";
    
    // jalankan query
    if(mysqli_query($koneksi, $query)) {
        header("location:../tampilan/data_jabatan.php");
    } else {
      echo "Data jabatan gagal ditambahkan";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kepegawaian</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

    <div class="container">
        <div class="side-kiri">
            <div class="identitas">
                <div class="logo">
                    <img src="../../gambar/logo.jpeg">
                </div>
                
            </div>
            <div class="judul">
                    Sistem Informasi Kepegawaian
                </div>
            <div class="kotak-akses">
                Admin Toko
            </div>
            <div class="side-menu">
                <img src="../../gambar/dashboard.png">
                <a href="../beranda_admin.php">Beranda</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/jabatan.png">
                <a href="../tampilan/data_jabatan_admin.php">Data Jabatan</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="../tampilan/data_karyawan_admin.php">Data Karyawan</a>
            </div>
            <div hidden class="side-menu">
                <img src="../../gambar/gaji.png">
                <a href="../tampilan/data_penggajian.php">Penggajian</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/laporan.png">
                <a href="../tampilan/laporan_admin.php">Laporan</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
            <div class="kepala-garis"><img src="../../gambar/garis.png"></div>
                <div class="logout"><a href="../../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <h1>Form Input Jabatan</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <form method="POST" action="">
                    <div class="label">ID Jabatan</div>
                    <input type="text" name="id_jabatan" placeholder="JB001">
                    <div class="label">Nama Jabatan</div>
                    <input type="text" name="nama_jabatan" placeholder="Masukan Nama">
                </div>
                <div class="kotak_input">
                    <div class="label">Gaji Pokok</div>
                    <input type="text" name="gaji_pokok" placeholder="00000">
                    <input type="submit" value="SIMPAN" name="submit">
                    </form>
                    <a href='../tampilan/data_jabatan_admin.php' ><button>CANCEL</button></a>
                </div>
            </div>
            <div class="kaki">
                Copyright@by CV. Mellavista
            </div>
        </div>
    </div>
    
</body>
</html>