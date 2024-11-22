<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h1>Hasil Perhitungan</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];

        // Proses perhitungan berdasarkan operasi yang dipilih
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
                echo "Hasil Penjumlahan: $hasil";
                break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
                echo "Hasil Pengurangan: $hasil";
                break;
            case 'kali':
                $hasil = $bil1 * $bil2;
                echo "Hasil Perkalian: $hasil";
                break;
            case 'bagi':
                if ($bil2 == 0) {
                    echo "Pembagian dengan nol tidak dapat dilakukan.";
                } else {
                    $hasil = $bil1 / $bil2;
                    echo "Hasil Pembagian: $hasil";
                }
                break;
            default:
                echo "Operasi tidak valid.";
        }
    } else {
        echo "Tidak ada data yang dikirim.";
    }
    ?>
    
    <br><br>
    <a href="input.php">Kembali ke Input Bilangan</a> <!-- Tautan kembali -->
</body>
</html>
