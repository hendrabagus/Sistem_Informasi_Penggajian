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
                <a href="data_jabatan_admin.php">Data Jabatan</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="data_karyawan_admin.php">Data Karyawan</a>
            </div>
            <div hidden class="side-menu">
                <img src="../../gambar/gaji.png">
                <a href="data_penggajian.php">Penggajian</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/laporan.png">
                <a href="laporan_admin.php">Laporan</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
            <div class="kepala-garis"><img src="../../gambar/garis.png"></div>
                <div class="logout"><a href="../../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <h1>Data Karyawan</h1>
            </div>
            <div class="halaman-data">
                <div class="kotak_search">
                    <div class="kotak_tambah">
                        <div class="tambah">
                        <a href="../input/input_karyawan.php"><button>Tambah Data Karyawan</button></a>
                        </div>
                    </div>
                    
                    <div class="kotak_cari">
                        <form action="cari_karyawan_admin.php" method="POST">
                        <input type="text" name="cari" placeholder="Masukan Kata Kunci">
                    </div>
                        <div class="kotak_tombol_cari">
                        <div class="tambah">
                        <input hidden type="submit" name="submit" value="CARI">
                        </form>
                        </div>
                    </div>
                </div>
                <table class="tabel1">
                    <tr>
                    <th>No</th>
                    <th>ID Karyawan</th>
                    <th>Nama Karyawan</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th colspan="4">Aksi</th>
                    </tr>
                    <tr>
                    <?php 
                        include '../../koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"SELECT * FROM karyawan ORDER BY nama_karyawan ASC");
                        while($row = mysqli_fetch_array($data)){
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id_karyawan']; ?></td>
                        <td><?php echo $row['nama_karyawan']; ?></td>
                        <td><?php echo $row['jk']; ?></td>
                        <td><?php echo $row['no_telp']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>
                            <div class="aksi_edit">
                            <a href='../input/edit_karyawan.php?id_karyawan=<?php echo $row['id_karyawan']; ?>'><button>Edit</button></a>
                            </div>
                        </td>
                        <td>
                            <div class="aksi_detail">
                            <a href='detail_karyawan_admin.php?id_karyawan=<?php echo $row['id_karyawan']; ?>'><button>Detail</button></a>
                            </div>
                        </td>
                        <td>
                        <div class="aksi_hapus">
                        <a href='delete_karyawan.php?id_karyawan=<?php echo $row['id_karyawan']; ?>' onclick="return confirm('Apakah anda yakin hapus data ini?')"><button>Hapus</button></a>
                            </div>
                        </td>
                        <td>
                            <div class="aksi_detail">
                            <a href='cetak_karyawan.php?id_karyawan=<?php echo $row['id_karyawan']; ?>' target="_blank"><button>Cetak</button></a>
                            </div>
                        </td>
                    </tr>
                    <?php 
                    }
                    ?>
                
                    
                </table>
            </div>
            <div class="kaki">
                Copyright@by CV. Mellavista
            </div>
        </div>
    </div>
    
</body>
</html>