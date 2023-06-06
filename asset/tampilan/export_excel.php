<!DOCTYPE html>
<html>

<head>
    <title>Export Data Ke Excel Dengan PHP</title>
</head>

<body>

    <?php
	    header("Content-type: application/vnd-ms-excel");
	    header("Content-Disposition: attachment; filename=Laporan Data Penggajian.xls");
	?>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Tanggal Penggajian</th>
            <th>ID Karyawan</th>
            <th>Nama Karyawan</th>
            <th>Jabatan</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Pendidikan</th>
            <th>Tanggal Mulai Kerja</th>
            <th>Status Karyawan</th>
            <th>Email</th>
            <th>No Rekening</th>
            <th>Lembur</th>
            <th>Potongan</th>
            <th>Total Gaji</th>
        </tr>
        <?php 

        // Koneksi
        include '../../koneksi.php';		
        
        // menampilkan data pegawai
		$data = mysqli_query($koneksi,"SELECT penggajian.*, jabatan.*, karyawan.* 
        FROM penggajian
        JOIN karyawan ON penggajian.id_karyawan = karyawan.id_karyawan
        JOIN jabatan ON karyawan.id_jabatan = jabatan.id_jabatan");
		$no = 1;
		while($row = mysqli_fetch_array($data)){
		?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['tgl_penggajian']; ?></td>
            <td><?= $row['id_karyawan']; ?></td>
            <td><?= $row['nama_karyawan']; ?></td>
            <td><?= $row['nama_jabatan']; ?></td>
            <td><?= $row['jk']; ?></td>
            <td><?= $row['tempat_lahir']; ?></td>
            <td><?= $row['tgl_lahir']; ?></td>
            <td><?= $row['agama']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['no_telp']; ?></td>
            <td><?= $row['pendidikan']; ?></td>
            <td><?= $row['tgl_mulai_kerja']; ?></td>
            <td><?= $row['status_karyawan']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['no_rek']; ?></td>
            <td><?= $row['lembur']; ?></td>
            <td><?= $row['potongan']; ?></td>
            <td><?= $row['total_gaji']; ?></td>
        </tr>
        <?php 
		}
		?>
    </table>
</body>

</html>