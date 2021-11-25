<?php
	declare (strict_types=1);
	$mapp = "C:\\temp\\";
		$filUppladdning =  $mapp . basename($_FILES['userfile']['name']);
		var_dump($filUppladdning);
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
		
				</form>
			</head