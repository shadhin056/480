<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="mystyle3.css">
</head>
<body>
	<div class="container">
		<header>
			
			<ul style="width: 100%">
  <li style="width: 80%;text-align:right"><a>Welcome To Sign In (Admin Account)</a></li>
 <li style="float:right"><a class="active" href="Assignment07.php">Login</a></li>
  <li style="float:right"><a class="active" href="Assignment07.php">Sign Up</a></li>
</ul>
		</header>

		<!--<nav>
			<img src="a.png" style="max-height: 100% ; max-width: 100%">
		</nav>-->
		<article>
		
<?php 
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shadhin";	
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE register SET register.Password='45698' WHERE register.Password='???'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
			
		</article>
		<footer style="clear: both;">Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>