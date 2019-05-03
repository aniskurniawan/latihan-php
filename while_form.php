<html>
<head>
<title>Belajar While pada Tanggal</title>
</head>
<body>
TANGGAL : 
<select name="cmbTanggal">
<?php
$nomor	= 0;
while ($nomor < 31) {
	$nomor++;
	echo "<option value='$nomor'> $nomor </option>";
}
?>
</select>
</body>
</html>
