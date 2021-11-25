<?php
	declare (strict_types=1);
	
	//ta emot uppgifter från formuläret 
	$namn=filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
	$hidden=filter_input(INPUT_POST, "hidden", FILTER_SANITIZE_STRING);
	if($hidden==''){
	//skapa en sammanfogad sträng med värdena från formuläret
	$hidden=$namn . "";
}else{
	$hidden=$hidden . "|" . $namn;
}
	
	//skapa en array
		$namnArray=explode("|", $hidden);
	//sortera arrayen	
		sort($namnArray, SORT_LOCALE_STRING);
?>
<!DOCTYPE html>
<html lang = "sv">
	<head>
		<meta charset="UTF-8">
		<title>Sortera namn (4.10)</title>
	</head>
		<form method="POST">
				Ange namn: <input type="text" name="namn"><br>
				<input type="submit" value="spara"><br>
				<input type="hidden" name="hidden" size="100" value="<?=$hidden; ?>"> 
		</form>
		<?php 
			//skriv ut namnen på en egen rad
			foreach($namnArray as $n) {
				echo "$n<br>";
			}
		?>
	<body>
	</body>
</html>