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
 <li style="float:right"><a class="active" href="Login.php">Login</a></li>
  <li style="float:right"><a class="active" href="Main.php">Sign Up</a></li>
</ul>
		</header>

		<!--<nav>
			<img src="a.png" style="max-height: 100% ; max-width: 100%">
		</nav>-->
		<article>
	<?php
//data insert
        ;
        if(empty($_POST["firstname"])){
             header("Location: register.php");
        } else {
            
	$pfull_name=$_POST["firstname"];
	$pNick_name=$_POST["lastname"];
	$pGender= $_POST["gender"] ;
	$pEmail=$_POST["email22"];
	$pPhone=$_POST["telphone"];
	$pBirthday= $_POST["Birth_day"];
	$ppassword=$_POST["pass2"];
        
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
    echo "You have successfully Create Your Account";
    session_destroy();
    exit();
} else {
    echo "You Have already acccount";
    session_destroy();
    exit();
}
	// Close connection
		
mysqli_close($conn);
}
	?> 
		</article>
		<footer style="clear: both;">Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>