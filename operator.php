<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$hasilPenugasanTambah = $a += $b;
$hasilPenugasanKurang = $a -= $b;
$hasilPenugasanKali = $a *= $b;
$hasilPenugasanBagi = $a /= $b;
$hasilPenugasanSisaBagi = $a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil tambah: {$hasilTambah} <br>";
echo "Hasil kurang: {$hasilKurang} <br>";
echo "Hasil kali: {$hasilKali} <br>";
echo "Hasil bagi: {$hasilBagi} <br>";
echo "Sisa bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";

echo "Hasil sama: {$hasilSama} <br>";
echo "Hasil tidak sama: {$hasilTidakSama} <br>";
echo "Hasil lebih kecil: {$hasilLebihKecil} <br>";
echo "Hasil lebih besar: {$hasilLebihBesar} <br>";
echo "Hasil lebih kecil sama: {$hasilLebihKecilSama} <br>";
echo "Hasil lebih besar sama: {$hasilLebihBesarSama} <br>";

echo "Hasil AND: {$hasilAnd} <br>";
echo "Hasil OR: {$hasilOr} <br>";
echo "Hasil NOT A: {$hasilNotA} <br>";
echo "Hasil NOT B: {$hasilNotB} <br>";

echo "Hasil penugasan tambah: {$hasilPenugasanTambah} <br>";
echo "Hasil penugasan kurang: {$hasilPenugasanKurang} <br>";
echo "Hasil penugasan kali: {$hasilPenugasanKali} <br>";
echo "Hasil penugasan bagi: {$hasilPenugasanBagi} <br>";
echo "Hasil penugasan sisa bagi: {$hasilPenugasanSisaBagi} <br>";

echo "Hasil identik: {$hasilIdentik} <br>";
echo "Hasil tidak identik: {$hasilTidakIdentik} <br>";
?>