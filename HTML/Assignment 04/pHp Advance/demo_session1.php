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
	$_SESSION["shadhin01"]="green";
	$_SESSION["shadhin02"]="red";
	echo "session strt from here";
	?>
</body>
</html>