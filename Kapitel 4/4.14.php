
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>4.14</title>
    </head>
    <body>
	<h1>Citat</h1>
        <form method="POST">
		</form>
	</body>
	<?php
		$fil = file("../4.14citat.txt");
		$citatRandom = array_rand($fil);
		echo $fil[$citatRandom];
	?>	
</html>	