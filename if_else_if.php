<html>
<head>
<title>Belajar IF ELSE IF</title>
</head>
<body>
<?php
$nilai	= "75";

if($nilai >= 80) {
	$nilaiHuruf = "A";
} 
else if($nilai >= 70) {
	$nilaiHuruf = "B";
}
else if($nilai >= 50) {
	$nilaiHuruf = "C";
}
else if($nilai >= 30) {
	$nilaiHuruf = "D";
}
else {
	$nilaiHuruf = "E";
}

// Menampilkan
echo "Nilai Ujian Matematika ( $nilai ) mendapat = ".$nilaiHuruf;
?>
</body>
</html>
