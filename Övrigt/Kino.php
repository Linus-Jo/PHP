<!DOCTYPE html>
<html>
    <head>
        <title>Kino!!!"!"!"!"!"!"!")!)"!)")!</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="POST">
            Ange 11 tal(mellan 1 och 70) separerade med ETT mellanslag!<input type="text" name="minaTal" size="25"><br>
            <input type="submit" value="Skicka">
        </form>
	</body>
</html>

<?php
	//Keno!
	
	//Slumpa fram 20 tal mellan 1 och 70!
	
	//jämför de 20 slumpade talen med 11 inmatade tal och berätta hur
	//många som var rätt.
	
	if (isset($_POST['minaTal'])) { 
		//Skapa en array av de inmatade talen
		$minaTal=explode(" ", $_POST['minaTal']);
		
		//FELKONTROLL!
		$ok=true;
		if (count($minaTal) !==11) {  // Det är inte heltal mellan 1 och 70
			echo "Det skall vara 11 tal din idiot";
			$ok=false;
		} else {
			for($i=0;$i<11;$i++) {
				if(!is_int((int)$minaTal[$i]) || $minaTal[$i]>70 ||
				$minaTal[$i]<1) {
					echo "Det ska vara 11 tal mellan 1 och 70";
					$ok=false;
					break;
				}
			}
		}
		
		if($ok) {
	
	$tal=[];
		while(count($tal)<20) {
		$rnd=rand(1,70);
		$tal[$rnd]=1;
	}
		//sortera talen
		ksort($tal, SORT_NUMERIC);
		//skriv ut talen
		echo "De 20 slumpade talen är....<br>";
		foreach($tal as $key=>$value) {
			echo " $key ";
		}
		sort($minaTal, SORT_NUMERIC);
		//skriv ut dem
		echo "<br><br>Dina tal var...<br>";
		$antalRatt=0;
		foreach($minaTal as $value) {
			//Kontrollera om ditt tal finns bland de slumpade
			if(array_key_exists($value, $tal)) {
				echo "<b>$value</b> ";
				$antalRatt++;
			} else {
				echo "$value ";
			}
		}
		echo "<br>Du fick $antalRatt rätta tal!";
	}
}
?>
