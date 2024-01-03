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
                <h1>Laporan Data Karyawan</h1>
            </div>
            <div class="halaman-data">
            <div class="kotak_search">
                    <div class="kotak_tambah">
                        <div class="tambah">
                        <a href="export_excel.php"><button>Export Laporan Excell</button></a>
                        </div>
                    </div>
                    
                    <div class="kotak_cari">
                        <form action="cari_penggajian.php" method="POST">
                        <input hidden type="text" name="cari" placeholder="Masukan Kata Kunci">
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
                    <th>Jabatan</th>
                    <th>Jenis Kelamin</th>
                    <th>TTL</th>
                    <th>Alamat</th>
                    <th>Gaji Pokok</th>
                    </tr>
                    <tr>
                    <?php 
                        include '../../koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"SELECT karyawan.*, jabatan.nama_jabatan, jabatan.gaji_pokok
                        FROM karyawan
                        JOIN jabatan ON karyawan.id_jabatan = jabatan.id_jabatan ORDER BY nama_karyawan ASC");
                        while($row = mysqli_fetch_array($data)){
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id_karyawan']; ?></td>
                        <td><?php echo $row['nama_karyawan']; ?></td>
                        <td><?php echo $row['nama_jabatan']; ?></td>
                        <td><?php echo $row['jk']; ?></td>
                        <td><?php echo $row['tempat_lahir']; ?>, <?php echo $row['tgl_lahir']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td><?php echo $row['gaji_pokok']; ?></td>
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