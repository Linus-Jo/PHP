<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>4.1.php</title>
	</head>
	<body>
		<form method="POST">
			<h1>Skriv här!</h1>
			<input type="text" name="text" size=50><br>
			<input type="submit" value="Skicka" required>
			<input type="reset" value="Ångra" required>
		</form>
<?php
	$text=$_POST["text"];
	filter_var($_POST, FILTER_UNSAFE_RAW);
	$text= strtolower ($text);
	$text= ucwords ($text);
	$text= str_replace (" ", "", $text);
	echo lcfirst($text);

?>	
	</body>
</html>