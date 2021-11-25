<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>4.3.php</title>
	</head>
	<body>
		<form method="POST">
			<h1>Skriv här!</h1>
			<input type="text" name="text" size=50><br>
			<input type="submit" value="Skicka" required>
			<input type="reset" value="Ångra" required>
		</form>
<?php	
	$text =$_POST["text"];
	filter_var($_POST, FILTER_UNSAFE_RAW);
	$text = str_replace (array("a","A"), "4", $text);
	$text = str_replace (array("b","B"), "7", $text);
	$text = str_replace (array("c","C"), "8", $text);
	$text = str_replace (array("d","D"), "1", $text);
	$text = str_replace (array("e","E"), "2", $text);
	$text = str_replace (array("f","F"), "5", $text);
	$text = str_replace (array("g","G"), "9", $text);
	echo ($text);
?>	
	</body>
</html>