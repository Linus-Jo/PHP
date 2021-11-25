<?php
	//lista alla filer och mappar i Windows-katalogen
	$handle=opendir("c:/windows");
	while(false!==($entry=readdir($handle))){
		echo "$entry\n";
		if(is_dir("c:windows/$entry")){
			echo " [mapp]<br>";
		}else{
			echo" [fil]<br>";
		}
	}
	closedir($handle);
?>