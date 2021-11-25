<!DOCTYPE html>
<html lang = "sv">
	<head>
		<meta charset="UTF-8">
		<title>4.6.php</title>
	</head>
	<body>
		<form method = "POST">
			<h1>Skriv här!</h1>
			<input type="date" name="fodelseDag" required><br>
			<input type="submit" value="Skicka" >
			<input type="reset" value="Ångra">
		</form>
	<?php
		$fodelseDag=$_POST['fodelseDag'];
		$veckodag=date("l", (strtotime($fodelseDag)));
		echo "du var född på en $veckodag";
	?>

	</body>
</html>	