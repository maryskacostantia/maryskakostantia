<?php
// Menampilkan kalimat dengan angka yang meningkat dari 1 hingga 5
for ($i = 1; $i <= 5; $i++) {
    echo "Ini adalah hari ke-$i belajar PHP<br>";
}
?>

<form action="" method="POST">
<input type="text" name="angkal" size="2"> +
<input type="text" name="angka2" size="2">
<input type="submit" value="Proses" name="hitung">
</form>

Hasilnya adalah : |
<?php

if(isset($_POST['hitung'])){
$angka1=$_POST['angka1'];
$angka2=$_POST['angka2'];

$hasil=$angka1 + $angka2;
echo $hasil;
}
