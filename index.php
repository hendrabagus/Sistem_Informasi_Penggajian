<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Informasi Kepegawaian</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<?php
// Include file koneksi.php
include 'koneksi.php';

// Fungsi untuk mengenkripsi password menggunakan MD5
function encryptPassword($password) {
    return md5($password);
}

// Cek apakah form login telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Enkripsi password yang dimasukkan
    $encryptedPassword = encryptPassword($password);

    // Query untuk mencari pengguna dengan username dan password yang sesuai
    $query = "SELECT * FROM pengguna WHERE username = '$username' AND password = '$encryptedPassword'";
    $result = mysqli_query($koneksi, $query);

    // Cek jumlah baris hasil query
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Pengguna ditemukan
        $row = mysqli_fetch_assoc($result);
        
        // Cek level pengguna
        if ($row['level'] == 'admin') {
            // Redirect ke halaman admin
            header('Location:asset/beranda_admin.php');
        } elseif ($row['level'] == 'pimpinan') {
            // Redirect ke halaman pimpinan
            header('Location:asset/beranda_pimpinan.php');
        }
    } else {
        // Username atau password tidak valid
        echo 'Username atau password salah.';
    }
}
?>

    <div class="kotak-login">
        <h1>Login</h1>
        Silahkan Masukan Username dan Password
        <form action="" method="post" >
        <div class="label">
            Username
        </div>
        <input type="text" name="username" id="username" placeholder="Username">
        <div class="label">
            Password
        </div>
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" name="login" value="Masuk">
        </form>
    </div>
</body>

</html>