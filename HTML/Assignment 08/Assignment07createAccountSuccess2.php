<html>
<?php
session_start();
?>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle3.css">
</head>
<?php
// Date in the past
header( "Expires: Mon, 26 Jul 1997 05:00:00 GMT" );
header( "Cache-Control: no-cache" );
header( "Pragma: no-cache" );
?>

<body>

	<div class="container">
		<header>
			
			<ul style="width: 100%">
  <li style="width: 80%;text-align:right"><a>Welcome To Our Home</a></li>
 <li style="float:right"><a class="active" href="Assignment07.php">Login</a></li>
  <li style="float:right"><a class="active" href="Assignment07.php">Sign Up</a></li>
</ul>
		</header>

		<!--<nav>
			<img src="a.png" style="max-height: 100% ; max-width: 100%">
		</nav>-->
		<article>
	
	<h1 style="color: red; width: 100% ;text-align: center ;border: 2px solid green">Welcome to My World !!!! You have successfully Create Your Account</h1>
	
	
	<?php
//data insert
	$pfull_name=$_SESSION['firstname'];
	$pNick_name=$_SESSION['lastname'];
	$pGender=$_SESSION['gender'] ;
	$pEmail=$_SESSION['email22'];
	$pPhone=$_SESSION['telphone'];
	$pBirthday= $_SESSION['Birth_day'];
	$ppassword=$_SESSION['pass2'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shadhin";
//$ami="paru";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";
	
	
	$sql ="INSERT INTO register (Full_name, Nick_name, Gender,Email,Phone,Birthday,Password) VALUES ('$pfull_name','$pNick_name', '$pGender','$pEmail','$pPhone','$pBirthday','$ppassword');";
	
	if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	// Close connection
		
mysqli_close($conn);
	?><?php
 session_destroy(); ?>
		</article>
		<footer style="clear: both;">Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>