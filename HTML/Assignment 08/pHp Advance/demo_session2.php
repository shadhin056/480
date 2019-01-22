<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	echo "my =".$_SESSION["shadhin01"]."<br>";
	
	echo "my =".$_SESSION["shadhin02"]."<br>";
	
	

	?>
<?php
print_r($_SESSION);
?>
<?php
	
	
$_SESSION["shadhin01"] = "ok";
print_r($_SESSION);
	?>
	<?php
	
	echo "distroy";
	print_r($_SESSION);
	
	?>
</body>
</html>