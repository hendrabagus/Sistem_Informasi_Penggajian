<!DOCTYPE html>
<html>

<head>
    <title>Export Data Ke Excel Dengan PHP</title>
</head>

<body>

    <?php
	    header("Content-type: application/vnd-ms-excel");
	    header("Content-Disposition: attachment; filename=Laporan Data Karyawan.xls");
	?>

    <table border="1">
        <tr>
            <th>No</th>
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
            <th>Gaji Pokok</th>
            <th>Foto</th>
        </tr>
        <?php 

        // Koneksi
        include '../../koneksi.php';		
        
        // menampilkan data pegawai
		$data = mysqli_query($koneksi,"SELECT karyawan.*, jabatan.*, karyawan.* 
        FROM karyawan
        JOIN jabatan ON karyawan.id_jabatan = jabatan.id_jabatan");
		$no = 1;
		while($row = mysqli_fetch_array($data)){
		?>
        <tr>
            <td><?= $no++; ?></td>
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
            <td><?= $row['gaji_pokok']; ?></td>
            <td><img src="../../gambar/foto/<?= $row['foto']; ?>"></td>
        </tr>
        <?php 
		}
		?>
    </table>
</body>

</html>