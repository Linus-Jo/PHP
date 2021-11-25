<?php
	declare (strict_types=1);
?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>4.15</title>
    </head>
    <body>
	<h1>Send it in baby!</h1>
        <form enctype="multipart/form-data" method="POST">
			<input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
			<input name="userfile" type="file" accept="image/*" required>
			<input type="submit" value="Skicka!">
		</form>
	</body>
</html>
<?php
$mapp = "../Bilder/";
var_dump($mapp);
	if($_FILES){
		$mapp = "../Bilder/";
		$filUppladdning =  $mapp . basename($_FILES['userfile']['name']);
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $filUppladdning)){
		echo "Du har valt denna fil $filUppladdning";
	}else {
		echo "nä det funkar ej";
	}	
}
?>
<!DOCTYPE html>
	<html lang="sv">
		<head>
			<meta charset="UTF-8">
			<title>4.15</title>
		</head>
		<body>
			<h1>Din bild</h1>
				<form enctype="multipart/form-data" method="POST">
					<img src="<?=$filUppladdning?>" alt="Nej den laddar inte" width="500">
				</form>
		</body>
	</html>