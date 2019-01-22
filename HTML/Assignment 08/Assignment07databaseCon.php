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
	
	<h1 style="color: red; width: 100% ;text-align: center ;border: 2px solid green">Welcome to My World You have successfully Create Your Account</h1>
	<h2 style="color: #897AE5; width: 100% ;text-align: center ;border: 2px solid green">Your Input: Using File with Array</h2>


	<?php
	$myfile = fopen( "newfile.txt", "r" )or die( "Unable to open file!" );
	$cars = file( "newfile.txt" );
	echo "First Name :" . $cars[ 0 ] . "<br>";
	echo "Last Name :" . $cars[ 1 ] . "<br>";
	echo "Gender:" . $cars[ 2 ] . "<br>";
	echo "Your email address is:" . $cars[ 3 ] . "<br>";
	echo "Phone Number : " . $cars[ 4 ] . "<br>";
	echo "Birthday : " . $cars[ 5 ] . "<br>";
	echo "Password : " . $cars[ 6 ] . "<br>";


	?>
	<h2 style="color: #897AE5; width: 100% ;text-align: center ;border: 2px solid green">Your Input: Using SessioN </h2> First Name :
	<?php echo $_SESSION['firstname']; ?><br> Last Name :
	<?php echo $_SESSION['lastname']; ?><br> Gender:
	<?php echo $_SESSION['gender'] ;?><br> Your email address is:
	<?php echo $_SESSION['email22'] ; ?><br> Phone Number :
	<?php echo $_SESSION['telphone'] ;?><br> Birthday :
	<?php echo $_SESSION['Birth_day'] ;?><br> Password :
	<?php echo $_SESSION['pass2'] ;?><br>

	<h2 style="color: #897AE5; width: 100% ;text-align: center ;border: 2px solid green">DATA BASE COnnection </h2>
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
echo "Connected successfully";
	
	
	
	
	/*$sql = "INSERT INTO register (Full_name, Nick_name, Gender,Email,Phone,Birthday,Password) VALUES ($pfull_name,$pNick_name, $pGender,$pEmail,$pPhone,$pBirthday,$ppassword)";*/
	
	$sql ="INSERT INTO register (Full_name, Nick_name, Gender,Email,Phone,Birthday,Password) VALUES ('$pfull_name','$pNick_name', '$pGender','$pEmail','$pPhone','$pBirthday','$ppassword');";
	
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	// Close connection
		
mysqli_close($conn);
	?>

	<h2 style="color: #897AE5; width: 100% ;text-align: center ;border: 2px solid green">Your Input: Using File </h2>
	<?php
	$myfile = fopen( "newfile.txt", "a+" )or die( "Unable to open file!" );
	// Output one character until end-of-file
	while ( !feof( $myfile ) ) {
		echo "<br>";
		echo fgets( $myfile );
	}


	$cars = file( "newfile.txt" );

	fclose( $myfile );
	?>
	<h2 style="color: #897AE5; width: 100% ;text-align: center ;border: 2px solid green">Your Input: Using File  Just print Array </h2>
	<?php
	print_r( file( "newfile.txt" ) );
	?>
	<?php session_destroy(); ?>
		</article>
		<footer style="clear: both;">Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>