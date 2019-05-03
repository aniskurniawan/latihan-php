<html>
<head>
<title>Belajar Switch</title>
</head>
<body>
<?php
$hari	= date('w');

switch($hari) {
	case 0:
		$nmhari	= "Minggu"; break;
	case 1:
		$nmhari	= "Senin"; break;
	case 2:
		$nmhari	= "Selasa"; break;
	case 3:
		$nmhari	= "Rabu"; break;
	case 4:
		$nmhari	= "Kamis"; break;
	case 5:
		$nmhari	= "Jum'at"; break;
	case 7:
		$nmhari	= "Sabtu"; break;
}

echo "Hari ini adalah hari $nmhari";
?>
</body>
</html>
