
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


<?php
    include "../../koneksi.php";

    $id_karyawan = $_GET['id_karyawan'];
    $sql = "SELECT karyawan.*, jabatan.nama_jabatan FROM karyawan LEFT JOIN jabatan ON karyawan.id_jabatan = jabatan.id_jabatan WHERE id_karyawan='$id_karyawan'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id_karyawan = $row['id_karyawan'];
        $id_jabatan = $row['id_jabatan'];
        $nama_karyawan = $row['nama_karyawan'];
        $jk = $row['jk'];
        $tempat_lahir = $row['tempat_lahir'];
        $tgl_lahir = $row['tgl_lahir'];
        $agama = $row['agama'];
        $alamat = $row['alamat'];
        $no_telp = $row['no_telp'];
        $pendidikan = $row['pendidikan'];
        $tgl_mulai_kerja = $row['tgl_mulai_kerja'];
        $status_karyawan = $row['status_karyawan'];
        $email = $row['email'];
        $no_rek = $row['no_rek'];
        $foto = $row['foto'];
        $nama_jabatan = $row['nama_jabatan'];
    }
?>

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
                <a href="../tampilan/data_jabatan.php">Data Jabatan</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/pegawai.png">
                <a href="../tampilan/data_karyawan.php">Data Karyawan</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/gaji.png">
                <a href="../tampilan/data_penggajian.php">Penggajian</a>
            </div>
            <div class="side-menu">
                <img src="../../gambar/laporan.png">
                <a href="../tampilan/laporan.php">Laporan</a>
            </div>
        </div>
        <div class="side-kanan">
            <div class="kepala">
                <div class="kepala-garis"><img src="../../gambar/garis.png"></div>
                <div class="logout"><a href="../../logout.php">Logout</a></div>
            </div>
            <div class="judul-halaman">
                <div class="judul-detail">Detail Data Karyawan</div>
                <div class="link"><a href="data_karyawan.php">Data Karyawan</a>/Detail Data Karyawan</div>
            </div>
            <div class="kotak-judul-detail">
                Detail Data Karyawan
            </div> 
            <div class="halaman-beranda">
                <div class="detail-foto">
                    <img src="../../gambar/foto/<?php echo $foto; ?>">
                    <br>
                    <h4><?php echo $id_karyawan; ?></h4>
                    <h3><?php echo $nama_karyawan; ?></h3>
                    <h4><?php echo $nama_jabatan; ?></h4>
                </div>
                <div class="detail-identitas">
                    <br>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">ID Jabatan</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $id_jabatan; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Jenis Kelamin</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $jk; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Tempat, Tanggal Lahir</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $tempat_lahir; ?>, <?php echo $tgl_lahir; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Agama</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $agama; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Alamat</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $alamat; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Nomor Telepon</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $no_telp; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Pendidikan</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $pendidikan; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Tanggal Mulai Kerja</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $tgl_mulai_kerja; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Status Karyawan</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $status_karyawan; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Email</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $email; ?></div>
                    </div>
                    <div class="kotak-identitas">
                        <div class="identitas-kiri">Nomor Rekening</div>
                        <div class="identitas-tengah">:</div>
                        <div class="identitas-kanan"><?php echo $no_rek; ?></div>
                    </div>
            </div>
            
        </div>
        <div class="kaki">
                Copyright@by Hendra Bagus Setiawanto
            </div>
    </div>
    
</body>
</html>