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
<body onload="window.print()">
    <table width="650" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140" rowspan="4"><img src="../../gambar/logo.jpeg" width="100" height="100" align="center"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th width="10">&nbsp;</th>
            <th colspan="2"><font size="5" align="center"><b>PT. Leburre Baghraf Indonesia</b></font></th>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td colspan="2"><div align="center"><font size="2" >Metropolitan Tower Lt 12 Unit C TB Simatupang Jl RA Kartini No 9, RT.10 RW.4</font></div></td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td colspan="2"><div align="center"><font size="2">Cilandak Barat , Jakarta Selatan - DKI Jakarta, Indonesia 12430</font></div></td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140" colspan="3"><hr style="height:2px;background-color:black"></td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140" colspan="3"><div align="center"><font size="4"><b><u>SLIP GAJI KARYAWAN</u></b></font></div></td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140" colspan="3">
            <table width="640" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="130">ID Karyawan</td>
                    <td width="5">:</td>
                    <td width="180"> <?php echo $id_karyawan; ?></td>
                    <td width="10">&nbsp;</td>
                    <td width="130">Tanggal Penggajian</td>
                    <td width="5">:</td>
                    <td width="180"> <?php echo $tgl_penggajian; ?></td>
                </tr>
                <tr>
                    <td width="130">Nama Karyawan</td>
                    <td width="5">:</td>
                    <td width="180"> <?php echo $nama_karyawan; ?></td>
                    <td width="10">&nbsp;</td>
                    <td width="130">Status Karyawana</td>
                    <td width="5">:</td>
                    <td width="180"> <?php echo $status_karyawan; ?></td>
                </tr>
                <tr>
                    <td width="130">Jabatan</td>
                    <td width="5">:</td>
                    <td width="180"> <?php echo $nama_jabatan; ?></td>
                    <td width="10">&nbsp;</td>
                    <td width="130">No Rekening</td>
                    <td width="5">:</td>
                    <td width="180"> <?php echo $no_rek; ?></td>
                </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140" colspan="3">
                <table width="640" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="150" colspan="3"><b><u>PENGHASILAN</u></b></td>
                        <td width="20">&nbsp;</td>
                        <td width="150" colspan="3"><b><u>POTONGAN</u></b></td>
                    </tr>
                    <tr>
                        <td width="150" colspan="3">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150" colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="150">Gaji Pokok</td>
                        <td width="10">=</td>
                        <td width="110"><div align="right">Rp. <?php echo $gaji_pokok; ?></div></td>
                        <td width="20">&nbsp;</td>
                        <td width="150">Ketidakhadiran</td>
                        <td width="10">=</td>
                        <td width="110"><div align="right">Rp. <?php echo $potongan; ?></div></td>
                    </tr>
                    <tr>
                        <td width="150">Lembur</td>
                        <td width="10">=</td>
                        <td width="110"><div align="right">Rp. <?php echo $lembur; ?></div></td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110"><hr style="height:1px;background-color:black"></td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110"><hr style="height:1px;background-color:black"></td>
                    </tr>
                    <tr>
                        <td width="150"><b>Total (A)</b></td>
                        <td width="10">=</td>
                        <td width="110"><div align="right">Rp. <?php echo $totalA; ?></div></td>
                        <td width="20">&nbsp;</td>
                        <td width="150"><b>Total (B)</b></td>
                        <td width="10">&nbsp;</td>
                        <td width="110"><div align="right">Rp. <?php echo $potongan; ?></div></td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150"><b>Gaji Bersih</b></td>
                        <td width="10">&nbsp;</td>
                        <td width="110"><div align="right">Rp. <?php echo $total_gaji; ?></div></td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10" colspan="2">Jakarta, 16 Mei 2023</td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10" colspan="2">Sekretariat Keuangan</td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10" colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10" colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10" colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="150">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="110">&nbsp;</td>
                        <td width="20">&nbsp;</td>
                        <td width="150">&nbsp;</td>
                        <td width="10" colspan="2"><b>Ali Mujahidin</b></td>
                    </tr>
                </table>
            </td>
        <tr>
            <td width="10">&nbsp;</td>
            <td width="140">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
</body>
</html>