<html>
<head>
<title>Belajar For untuk Form Tahun</title>
</head>
<body>
TAHUN : 
<select name="cmbTahun">
<?php
$batas	= date('Y');
for ($tahun	= 2005; $tahun <= $batas; $tahun++) {
	echo "<option value='$tahun'> $tahun </option>";
}
?>
</select>
</body>
</html>
