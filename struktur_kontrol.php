<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

echo "<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah.";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor.";
echo "<br>";

//---------------------------------------------
$nilaiSiswa = [85, 92, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";

$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

sort($nilai_siswa);

$nilai_diabaikan = 2;
$jumlah_siswa = count($nilai_siswa);
$total_nilai = 0;

for ($i = $nilai_diabaikan; $i < $jumlah_siswa - $nilai_diabaikan; $i++) {
    $total_nilai += $nilai_siswa[$i];
}

$nilai_rata_rata = $total_nilai / ($jumlah_siswa - (2 * $nilai_diabaikan));

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $total_nilai <br>";
echo "Nilai rata-rata setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $nilai_rata_rata <br>";

//---------------------------------------------------
$harga_produk = 120000;
$diskon = 20;
$batas_diskon = 100000;

if ($harga_produk > $batas_diskon) {
    $harga_setelah_diskon = $harga_produk - ($harga_produk * ($diskon / 100));
} else {
    $harga_setelah_diskon = $harga_produk;
}

echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($harga_setelah_diskon, 0, ',', '.') . "<br>";

//-------------------------------------------------------------
$skor = 700;

echo "Total skor pemain adalah: $skor <br>";

if ($skor > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>