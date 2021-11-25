<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>4.4.php</title>
	</head>
	<body>
		<form method="POST">
			<h1>Skriv här!</h1>
			<input type="text" name="text" size=50><br>
			<input type="submit" value="Skicka">
			<input type="reset" value="Ångra">
		</form>
<?php	
	$text =$_POST["text"];
	filter_var($_POST, FILTER_UNSAFE_RAW);
	$bokstaver = str_split($text);
	print_r(array_count_values($bokstaver));
	
	
?>
	</body>
</html>