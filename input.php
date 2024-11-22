<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Operasi</title>
</head>
<body>
    <h1>Masukkan Dua Bilangan</h1>
    <form action="hasil.php" method="POST">
        <label for="bil1">Bilangan 1:</label>
        <input type="number" id="bil1" name="bil1" required><br><br>

        <label for="bil2">Bilangan 2:</label>
        <input type="number" id="bil2" name="bil2" required><br><br>

        <label for="operasi">Pilih Operasi:</label>
        <select id="operasi" name="operasi" required>
            <option value="tambah">Penjumlahan</option>
            <option value="kurang">Pengurangan</option>
            <option value="kali">Perkalian</option>
            <option value="bagi">Pembagian</option>
        </select><br><br>

        <button type="submit">Hitung</button>
    </form>
</body>
</html>
