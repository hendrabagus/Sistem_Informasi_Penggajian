
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
    $sql = "SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'";
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
                <h1>Form Data Karyawan</h1>
            </div>
            <div class="halaman-beranda">
                <div class="kotak_input">

                <form method="post" action="proses_edit_karyawan.php" enctype="multipart/form-data">
                    <div class="label">ID Karyawan</div>
                    <input type="text" name="id_karyawan" value="<?php echo $id_karyawan; ?>" readonly>
                    <div class="label">Jabatan</div>
                        <select  name="id_jabatan">
                        <option>-- ID Jabatan --</option>
                        <?php
										include "../../koneksi.php";
		
										$sql=mysqli_query($koneksi,"select * from jabatan");
										while ($hasil=mysqli_fetch_array($sql)){
		
										echo "<option value='$hasil[id_jabatan]'>
										$hasil[id_jabatan] -> $hasil[nama_jabatan]";
		
										}
		
									?>

                        </select >
                    <div class="label">Nama Karyawan</div>
                    <input type="text" name="nama_karyawan" value="<?php echo $nama_karyawan; ?>">
                    <div class="label">Jenis Kelamin</div>
                    <select  name="jk" value="<?php echo $jk; ?>">
                            <option>-- Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select >
                    <div class="label">Tempat Lahir</div>
                    <input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>">
                    <div class="label">Tanggal Lahir</div>
                    <input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>">
                    <div class="label">Agama</div>
                    <select  name=agama value="<?php echo $agama; ?>">
                            <option>-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select >
                    <div class="label">Alamat</div>
                    <input type="text" name="alamat" value="<?php echo $alamat; ?>">
                </div>
                <div class="kotak_input">
                    <div class="label">Nomor Telepon</div>
                    <input type="text" name="no_telp" value="<?php echo $no_telp; ?>">
                    <div class="label">Pendidikan</div>
                    <input type="text" name="pendidikan" value="<?php echo $pendidikan; ?>">
                    <div class="label">Tanggal Mulai Kerja</div>
                    <input type="date" name="tgl_mulai_kerja" value="<?php echo $tgl_mulai_kerja; ?>">
                    <div class="label">Status Karyawanan</div>
                    <select  name="status_karyawan" value="<?php echo $status_karyawan; ?>">
                            <option>-- Pilih Status --</option>
                            <option value="Tetap">Tetap</option>
                            <option value="Kontrak">Kontrak</option>
                        </select >
                    <div class="label">Email</div>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                    <div class="label">No Rekening</div>
                    <input type="text" name="no_rek" value="<?php echo $no_rek; ?>">
                    <div class="label">Foto</div>
                    <input type="file" name="foto">
                    <div class="label">&nbsp;</div>
                    <input type="submit" value="EDIT" name="submit" onclick="return confirm('Apakah anda yakin mengedit data?')">
                    </form>
                    <a href='../tampilan/data_karyawan.php' ><button>CANCEL</button></a>
                </div>
            </div>
            <div class="kaki">
                Copyright@by Hendra Bagus Setiawanto
            </div>
        </div>
    </div>
    
</body>
</html>