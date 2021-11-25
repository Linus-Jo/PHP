<?php
	declare(strict_types=1);
	$mapp=filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);
	var_dump($mapp);
?>
<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
			<title>4.12.php</title>
	</head>
	<body>
		<form method="POST">
			<input type="text" name="text"/>
			<input type="submit" value="skicka"/>
		</form
	</body>
</html>

<?php
	if($mapp !== null){
		if(is_dir($mapp)){
		$arrayfiler = scandir($mapp);
		echo "mappen inehåller möget $mapp följande filer <br>";
		foreach($arrayfiler as $fil) {
		if (is_dir("$mapp\\$fil") === false) {
			echo "$mapp\\$fil" . ": " . filesize ("$mapp\\$fil"). " Bytes <br>";
		}
	 }
  }
}
?>