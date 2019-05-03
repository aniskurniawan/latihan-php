<html>
<head>
<title>Belajar Foreach pada Form</title>
</head>
<body>
BULAN : 
<select name="cmbBulan">
<?php
// Definisi data bulan
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
foreach ($bulan as $indeks => $nama) {
	echo "<option value='$indeks'> $nama </option>";
}
?>
</select>
</body>
</html>