<?php
	declare(strict_types=1);
	$tal=filter_input(INPUT_POST, "tal", FILTER_SANITIZE_STRING);
	$namnare=filter_input(INPUT_POST, "namnare", FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html lang = "sv">
	<head>
		<meta charset="UTF-8">
		<title>4.9.php</title>
	</head>
	<body>
		<form method="POST">
			Ange täljaren som skall delas med!!<input type="number" name="tal" required><br>
			Ange en nämnaren som skall delas med<input type="number" name="namnare"><br>
			<input type="submit" Value="Skicka"><br>
		</form>
		<?php
		if($tal !=null) {
			
				$tal2 = divide($tal, $namnare);
				if ($tal2 == 0){
					echo "$tal är delbart med $namnare";
				}else{
					echo "$tal är inte delbart med $namnare din korkboll!";
				}	
			}
		?>
	</body>
</html>
<?php
	function divide($tal, $namnare) {
				return $tal % $namnare;
			}