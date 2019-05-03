<html>
<head>
<title>Belajar While 3</title>
</head>
<body>
<?php
$nomor	= 0;
while ($nomor < 100) {
	$nomor++;
		
	// Membuat nomor jadi 3 digit (001, 002, ....011, 012, ....100)
	if($nomor <= 9) {
		$nomor	= "00".$nomor;
	}
	else if($nomor <= 99) {
		$nomor	= "0".$nomor;
	}
	else {
		$nomor	= $nomor;
	}
	
	echo $nomor;
	echo " ";
}
?>
</body>
</html>
