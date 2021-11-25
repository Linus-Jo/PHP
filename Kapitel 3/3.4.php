<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>1-100</title>
	</head>
	<body>
		<h1>ett till hundra</h1>
<?php
/*
for ($i=1;$i<=100;$i++){
	if ($i==69) {
		echo "$i nice <br>";
	}else{
		echo "Tärning $i är mindre nice <br>";
	}
}
*/
/*
for ($i=0;$i<=100;$i+=2){
	if ($i==69) {
		echo "$i nice <br>";
	}else{
		echo "Tärning $i är mindre nice <br>";
	}
}
*/	

	for ($i=1;$i<=100;$i++) { 

		if ($i%10==0&&$i%7!=0) { 

			echo "<span style='color:blue; font-weight:bold'> $i <br></span>"; 

	} 

	else if ($i%5==0&&$i%7!=0&&$i%10!=0) { 

		echo "<span style='font-weight:bold'> $i </span>"; 

	} 

	else if ($i%7==0&&$i%5==0&&$i%10!=0) { 

		echo "<span style='font-weight:bold; font-style:italic'> $i </span>"; 

	} 

	else if ($i%7==0&&$i%10==0) { 

		echo "<span style='color:blue; font-weight:bold; font-style:italic'> $i <br></span>"; 

	} 

	else if ($i%7==0&&$i%5!=0&&$i%10!==0&$i%2==0) { 

		echo "<span style='color:blue; font-style:italic'> $i </span>"; 

	} 

	else if ($i%7==0&&$i%5!=0&&$i%10!=0&&$i%2!=0) { 

		echo "<span style='font-style:italic'> $i </span>"; 

	} 

	else if ($i%2==0&&$i%10!=0&&$i%7!=0) { 

		echo "<span style='color:blue'> $i </span>"; 

	} 

	else { 

		echo "$i"; 

	} 

 

}

?>
	</body>
</html>
