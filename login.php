<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="proses_login.php" method="POST"> <!-- Mengarahkan ke proses_login.php -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <?php
    // Menampilkan pesan login jika ada
    if (isset($_GET['error'])) {
        echo "<p style='color:red;'>Login gagal! Username atau Password salah.</p>";
    }
    
    if (isset($_GET['empty'])) {
        echo "<p style='color:red;'>Input tidak lengkap! Silakan isi semua kolom.</p>";
    }
    ?>
    
</body>
</html>
