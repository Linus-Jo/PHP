<?php
	declare(strict_types=1);
?>
		<!DOCTYPE html>
		<html lang="sv">
			<head>
				<meta charset="UTF-8">
				<title>4.7</title>
			</head>
			<body>
		<h1>Födelsedag</h1>
				<form method="POST">
					Födelsedatum här! <input type="date" name="fodelsedag"><br>
					När jag fyller <input type="number" name="dag" required>dagar?<br>
					<input type="submit" value="Skicka">
				</form>
<?php
	//lägger till en filter sanitize för att filtrera bort farliga tecken.
	$fodelsedag = filter_input(INPUT_POST, "fodelsedag", FILTER_SANITIZE_STRING);
	$dag = filter_input(INPUT_POST, "dag", FILTER_SANITIZE_STRING);
	//en ifsats som gör värderna $dag null så att varningskyltarna försvinner i början.
	if($dag!=null) {
			//dateTimeImmutable representerar ett datum och tid.
		$datetime1=new dateTimeImmutable($fodelsedag);
		$datetime2=new dateTime("now");
			//intervalvariabeln($interval) är skillnaderna på datetime1 och datetime2.
		$interval= $datetime1->diff($datetime2);
			//här så skrivs det ut hur många dagar man är med hjälp av en &a och format
	echo "Du är " . $interval->format('%a dagar'). " gammal<br>";
		$dagar=$datetime1->modify("$dag days");
			//här så skriver den ut vilket datum du är i antal dagar som man skrev in i formuläret ($dagar).
	echo "Du är " . $dag . " dagar gammal den " . $dagar->format('d.m.Y')."<br>";
}
?>
</body>
</html>