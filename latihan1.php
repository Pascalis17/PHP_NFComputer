<?php
//belajar variabel
$namaSiswa = "Budi Santoso";
$umur = 20;
$berat_badan = 30.5;
$_pekerjaan = 'Mahasiswa';
$tes = $namaSiswa.$_pekerjaan;
//cetak variabel di dalam program PHP
echo 'Nama Siswa: '.$namaSiswa;
echo '<br/>Umur: '.$umur.' tahun';
echo '<br/>Berat Badan 1: '.$berat_badan.' kg';
echo "<br/>Berat Badan 2: $berat_badan kg";
echo '<br/>Berat Badan 3: $berat_badan kg';
echo '<br/>Pekerjaan 1: '.$_pekerjaan;
print '<br/>Pekerjaan 2: '.$_pekerjaan;
Nama Siswa 1: <?= $namaSiswa ?>
<br />Nama Siswa 2: <?= $namaSiswa.' '.$_pekerjaan ?>
<br />Umur: <?= $umur + $berat_badan ?> tahun
<br />Berat Badan : <?= $berat_badan; ?> kg
<br />Pekerjaan: <?= $_pekerjaan; ?>