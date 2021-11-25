<?php

	// Filnamn 
	$fil=__FILE__;
	
	// läs in inehållet till en variabel.
	$filinehall=file_get_contents($fil);
	
	// Gör om "farliga" tecken 
	$safe=htmlentities($filinehall);
	
	//skriv ut med bevarande av "white space":
	echo "<pre>$safe</pre>";