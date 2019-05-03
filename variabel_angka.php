<html>
<head>
<title>Belajar Variabel Angka</title>
</head>
<body>
<?php
// variabel data angka
$data_satu	= 10;
$data_dua	= 2;

// menampilkan
echo "DATA ANGKA :";
echo "<br> A : $data_satu";
echo "<br> B : $data_dua";
echo "<br>";

// Operasi penjumlahan
$tambah	= $data_satu + $data_dua;
echo "<br> Penjumlahan A + B : $tambah"; 

// Operasi pengurangan
$kurang	= $data_satu - $data_dua;
echo "<br> Pengurangan A - B : $kurang"; 

// Operasi perkalian
$kali	= $data_satu * $data_dua;
echo "<br> Perkalian A * B : $kali";
 
// Operasi pembagian
$bagi	= $data_satu / $data_dua;
echo "<br> Pembagian A / B : $bagi";
?>
</body>
</html>