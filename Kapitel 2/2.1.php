<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Uppgift 2.1 Jonglering</title>
	</head>
	<body>
		<h1>Uppgift 2.1 Jonglering</h1>
	<form method="GET">
		<input type="text" name="tal">
		<input type="submit" value="Sänd">
	</form>
<?php
	$tal=$_GET['tal'];
	
	echo "<b> $tal </b>";
	$int=(int) $tal;
	echo"som heltal $int<br>";
	$float=(float) $tal;
	echo "som Flyttal: $float <br>";
	$bool=(bool) $tal;
	echo "Som boolean: $bool <br>";
?>
	</body>
</html>