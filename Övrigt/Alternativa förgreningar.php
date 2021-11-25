<?php
/*
$plac= 3;
$medalj="ja";
$plac<4 ? $medalj=true : $medalj=false;
var_dump($plac, $medalj);
$user=$_GET['user'] ?? 'nobody';
var_dump($user);
*/

$sidor=$_GET['sidor']  ?? 2;
switch ($sidor) {
	case 4:
	case 6:
	case 8:
	case 12:
	case 20:
		$text="$sidor-sidig tärning";
		break;
	default:
		$text="Falsk tärning! <br>
	$sidor-sidig tärning finns inte!";
}

echo $text;
?>