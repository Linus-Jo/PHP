<?php
/*
for($i=1;$i<=10;$i++) {
	echo "Tärning $i visar:" .
	rand(1,6) . "<br>";
}
*/
/*
for($i=1;$i<=6;$i++) {
	$tarning[$i]=0;
}
for($i=1;$i<=5;$i++){
	$tarning[rand(1,6)]++;
}
foreach ($tarning as $varde => $antal){
	if($antal>0){
		echo "Du fick $antal $varde:or<br>";
	}
}
*/
/*
$tarning=$i=0;
while ($tarning!=6) {
	$tarning=rand(1,6);
	$i++;
}
echo "du behöver $i slag för att få en 6:a";
*/
/*
do {
	$tarning=rand(1,6);
	$i++;
} while ($tarning!=6);
echo"du behövde $i slag för att få en 6:a";
*/
$antal=0;
for($i=1;$i<=6;$i++) {
	$tarning[$i]=0;
}

do {
	$antal++;
	$tarning[rand(1,6)]++;
	for($i=1;$i<=6;$i++){
		if($tarning[$i]==0) {
			continue 2; //avbryt och fortsätt yttre loopen
		}
	}
	if($i==7){
		break;
	}
}while (true);

echo "Du behövde $antal slag för att få alla värden";
?>