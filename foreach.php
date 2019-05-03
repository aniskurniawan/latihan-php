<html>
<head>
<title>Belajar Foreach</title>
</head>
<body>
<?php
// Data Bulan dalam Array
$bulan = array();
$bulan[01]	= "Januari";
$bulan[02]	= "Februari";
$bulan[03]	= "Maret";
$bulan[04]	= "April";
$bulan[05]	= "Mei";
$bulan[06]	= "Juni";
$bulan[07]	= "Juli";
$bulan[08]	= "Agustus";
$bulan[09]	= "September";
$bulan[10]	= "Oktober";
$bulan[11]	= "November";
$bulan[12]	= "Desember";

// Menampilkan data
foreach ($bulan as $nama) {
	echo $nama;
	echo " <br>";
}
?> 
</body>
</html>
