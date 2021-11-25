<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>4.5.php</title>
	</head>
	<body>
		<form method="POST">
			<h1>Skriv här!</h1>
			<input type="radio" name="kryptera_dekryptera" id="kryptera" value="kryptera" checked>
			<label for="kryptera" >Kryptera</label>
			<input type="radio" name="kryptera_dekryptera" id="Dekryptera" value="dekryptera">
			<label for="Dekryptera" >Dekryptera</label>
			<input type="text" name="text" size=50><br>
			<input type="submit" value="Skicka">
			<input type="reset" value="Ångra">
		</form>
	<?php
	if(isset($_POST["text"])){
		$valja =$_POST['kryptera_dekryptera'];
		$text =$_POST["text"];
		
		
		$alfabet = "abcdefghijklmnopqrstuvwxyzåäö ABCDEFGHIJKLMOPQRSTUVWXYZÅÄÖ 0123456789 ,.!?<>!#¤%&/-_´`";
		if($alfabet)
	for ($i=0;$i<mb_strlen($text);$i ++){
		if($valja == "kryptera"){
		$bokstavett= mb_substr($text, $i, 1);
		$bokstavtwo= mb_strpos($alfabet, $bokstavett);
		$bokstavtwo ++;
		echo$bokstavtre = mb_substr($alfabet, $bokstavtwo, 1 );
	}else{
			$bokstavett=mb_substr($text, $i, 1);
		$bokstavtwo=mb_strpos($alfabet, $bokstavett);
		$bokstavtwo --;
		echo $bokstavtre = mb_substr($alfabet, $bokstavtwo, 1 );
	}
  }
}
	?>
	</body>
</html>