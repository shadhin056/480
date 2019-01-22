<!DOCTYPE html>
<html>

<head>
	
</head>

<body>
<?php
	
			 $myfile = fopen("s.txt", "a+") or die("Unable to open file!");

					 $ok=" ".PHP_EOL;
			
              fwrite($myfile, "shadhin ");
			  fwrite($myfile, "phy ");
			  fwrite($myfile, "19");
			fwrite($myfile, $ok);
		fclose($myfile);
	?>
</body>

</html>
