<!DOCTYPE html>
<html>

<head>

</head>

<body>
	<?php

	$myfile = fopen( "s.txt", "r" )or die( "Unable to open file!" );

	
	
		while(!feof($myfile))
		{
			echo fgets($myfile);
			echo '<br />';
			
		}
	?>
</body>

</html>