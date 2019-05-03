<html>
<head>
<title>Belajar Foreach pada Form</title>
</head>
<body>
BULAN : 
<select name="cmbBulan">
<?php
// Membuat daftar data array
$bulan = array(01 => "Januari", 
				02 => "Februari",
				03 => "Maret",
				04 => "April",
				05 => "Mei",
				06 => "Juni",
				07 => "Juli",
				08 => "Agustus",
				09 => "September",
				10 => "Oktober",
				11 => "November",
				12 => "Desember");

// Menampilkan data
foreach ($bulan as $indeks => $nama) {
	echo "<option value='$indeks'> $nama </option>";
}
?>
</select>
</body>
</html>
