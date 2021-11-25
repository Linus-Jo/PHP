<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>filhantering</title>
	</head>
	<body>
		<form enctype="multipart/form-data"method="POST">
			<!--Ett gömt inputfält med namnet MAX_FILE_SIZE före file-input gör att max storleken på filer kontrolleras på servern!-->
			<input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
			fil att skicka <input name="userfile" type="file" accept="image/*">
			<br>
			<input type="submit" value="skicka"/>
		</form>
	<?php
		if ($_FILES){
			$mapp = 'c:\\temp\\';
			$uppLaddadFil = $mapp . basename($_FILES['userfile']['name']);
			echo '<pre>';
			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uppLaddadFil)){
				echo "filen laddades upp och finns lagrad på $uppLaddadFil.<br>";
			}else{
				echo "något gick fel vid uppladdningen!<br>";
			}
			echo 'Här finns lite mera info om uppladdningen:<br>';
			print_r($_FILES);
			print "</pre>";
		}
	
	?>
	</body>
</html>

