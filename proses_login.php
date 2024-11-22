<?php
// Proses login sederhana
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah input lengkap
    if (empty($username) || empty($password)) {
        header("Location: login.php?empty=true");
        exit();
    }

    // Validasi username dan password (contoh sederhana)
    if ($username === 'admin' && $password === 'password123') {
        echo "<h1>Login Sukses!</h1>";
        // Lanjutkan ke halaman berikutnya atau dashboard di sini
    } else {
        header("Location: login.php?error=true");
        exit();
    }
}
?>
