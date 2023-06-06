<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Penggajian</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

    <div class="container">
        <div class="side-kiri">
            <div class="identitas">
                <div class="logo">
                    <img src="../../gambar/logo.jpg">
                </div>
                <div class="judul">
                Sistem Informasi Penggajian
                </div>
            </div>
            <div class="side-menu">
                <img src="../../gambar/dashboard.png">
                <a href="../beranda.php">Beranda</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/jabatan.png">
                <a href="data_jabatan.php">Data Jabatan</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="data_karyawan.php">Data Karyawan</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/gaji.png">
                <a href="data_penggajian.php">Penggajian</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/laporan.png">
                <a href="laporan.php">Laporan</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
            <div class="kepala-garis"><img src="../../gambar/garis.png"></div>
                <div class="logout"><a href="../../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <h1>Laporan Penggajian</h1>
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
                    <th>Nama Karyawan</th>
                    <th>Tanggal Penggajian</th>
                    <th>Rekening</th>
                    <th>Gaji Pokok</th>
                    <th>Lembur</th>
                    <th>Potongan</th>
                    <th>Gaji Total</th>
                    </tr>
                    <tr>
                    <?php 
                        include '../../koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"SELECT penggajian.*, jabatan.gaji_pokok, karyawan.nama_karyawan, karyawan.no_rek 
                        FROM penggajian
                        JOIN karyawan ON penggajian.id_karyawan = karyawan.id_karyawan
                        JOIN jabatan ON karyawan.id_jabatan = jabatan.id_jabatan");
                        while($row = mysqli_fetch_array($data)){
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama_karyawan']; ?></td>
                        <td><?php echo $row['tgl_penggajian']; ?></td>
                        <td><?php echo $row['no_rek']; ?></td>
                        <td><?php echo $row['gaji_pokok']; ?></td>
                        <td><?php echo $row['lembur']; ?></td>
                        <td><?php echo $row['potongan']; ?></td>
                        <td><?php echo $row['total_gaji']; ?></td>
                    </tr>
                    <?php 
                    }
                    ?>
                
                    
                </table>
            </div>
            <div class="kaki">
                Copyright@by Hendra Bagus Setiawanto
            </div>
        </div>
    </div>
    
</body>
</html>