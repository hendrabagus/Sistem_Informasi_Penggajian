<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    include "../../koneksi.php";

    $id_karyawan = $_GET['id_karyawan'];
    $sql = "SELECT karyawan.*, jabatan.nama_jabatan, jabatan.gaji_pokok FROM karyawan LEFT JOIN jabatan ON karyawan.id_jabatan = jabatan.id_jabatan WHERE id_karyawan='$id_karyawan'";
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
        $gaji_pokok = $row['gaji_pokok'];
    }

    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
?>

<body onload="window.print()">
<table width="870" border="2" cellpadding="0" cellspacing="0">
    <tr>
        <td>
<table width="850" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140" rowspan="4"><div align="right"><img src="../../gambar/logo.jpeg" width="140" height="100"></div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th width="10">&nbsp;</th>
            <td width="30">&nbsp;</td>
            <th colspan="2"><font size="5" align="center"><b>CV. MELLAVISTA</b></font></th>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td colspan="2"><div align="center"><font size="2" >PERCETAKAN - ALAT TULIS KANTOR</font></div></td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td colspan="2"><div align="center"><font size="2">Alam Asri Raya Blok K No 17 Vila Dago, Pamulang, Kota Tangerang Selatan Banten</font></div></td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140" colspan="3"><hr style="height:2px;background-color:black"></td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140" colspan="3"><div align="center"><font size="4"><b><u>DATA KARYAWAN</u></b></font></div></td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140" colspan="3"><div align="center"><font size="5"><b><?php echo $nama_karyawan; ?></b></font></div></td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140" colspan="3"><div align="center"><font size="3"><b><?php echo $nama_jabatan; ?></b></font></div></td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140" colspan="3"><div align="center"><font size="2"><b><?php echo $id_karyawan; ?></b></font></div></td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140" colspan="4">
                <table width="840" border="0" cellspacing="0" cellpadding="0">
                <tr height="25">
                        <td width="160">ID Karyawan</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $id_karyawan; ?></td>
                        <td width="20">&nbsp;</td>
                        <td width="160">Pendidikan</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $pendidikan; ?></td>
                    </tr>
                    <tr height="25">
                        <td width="160">Nama Lengkap</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $nama_karyawan; ?></td>
                        <td width="20">&nbsp;</td>
                        <td width="160">Nomor Telepon</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $no_telp; ?></td>
                    </tr>
                    <tr height="25">
                        <td width="160">Jabatan</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $nama_jabatan; ?></td>
                        <td width="20">&nbsp;</td>
                        <td width="160">Tanggal Mulai Kerja</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $tgl_mulai_kerja; ?></td>
                    </tr>
                    <tr height="25">
                        <td width="160">Jenis Kelamin</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $jk; ?></td>
                        <td width="20">&nbsp;</td>
                        <td width="160">Status Karyawan</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $status_karyawan; ?></td>
                    </tr>
                    <tr height="25">
                        <td width="160">Tempat, Tanggal Lahir</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $tempat_lahir; ?>, <?php echo $tgl_lahir; ?></td>
                        <td width="20">&nbsp;</td>
                        <td width="160">Gaji Pokok</td>
                        <td width="5">:</td>
                        <td width="245"> Rp. <?php echo $gaji_pokok; ?></td>
                    </tr>
                    <tr height="25">
                        <td width="160">Agama</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $agama; ?></td>
                        <td width="20">&nbsp;</td>
                        <td width="160">Nomor Rekening</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $no_rek; ?></td>
                    </tr>
                    <tr height="25">
                        <td width="160">Alamat</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $alamat; ?></td>
                        <td width="20">&nbsp;</td>
                        <td width="160">Email</td>
                        <td width="5">:</td>
                        <td width="245"> <?php echo $email; ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140" colspan="4">
                <table width="840" border="0" cellspacing="0" cellpadding="0">
                    <tr height="25">
                        <td width="60">&nbsp;</td>
                        <td width="300" rowspan="6"><img src="../../gambar/foto/<?php echo $foto; ?>" width="120" height="150"></td>
                        <td width="60">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                        <td width="300"><div align="center">Tangerang Selatan, <?php echo tgl_indo(date('Y-m-d'));?> </div></td>
                        <td width="60">&nbsp;</td>
                    </tr>
                    <tr height="25">
                        <td width="60">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                        <td width="300"><div align="center">Kepala Toko CV. Mellavista</div></td>
                        <td width="60">&nbsp;</td>
                    </tr>
                    <tr height="25">
                        <td width="60">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                        <td width="300">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                    </tr>
                    <tr height="25">
                        <td width="60">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                        <td width="300">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                    </tr>
                    <tr height="25">
                        <td width="60">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                        <td width="300">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                    </tr>
                    <tr height="25">
                        <td width="60">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                        <td width="60">&nbsp;</td>
                        <td width="300"><div align="center"><b><u>Fairuz Syifa Khaerunnisa</u></b></div></td>
                        <td width="60">&nbsp;</td>
                    </tr>
                    
                </table>
            </td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="30">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        
</table>
        </td>
    </tr>
</table>

</body>
</html>