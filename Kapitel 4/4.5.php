<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>4.5.php</title>
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
?>
	</body>
</html>