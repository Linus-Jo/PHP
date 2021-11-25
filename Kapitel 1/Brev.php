<?php

$namn=$_POST['namn'];
$email=$_POST['email'];

?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<head>
		<title>Brev från Söderhavsresor</title>
	</head>
	<body>
		<h1>Svarssida</h1>
			<p>Hej <?= $namn; ?><br>
			Kul att du är intresserad av att få veta mera om<br>
			söderströmsresor, vi kommer att skicka mail till följande adress <?= $email ?>.<br>
			På återseende<br>
			/Söderhavsresor</p>
	</body>
</html>