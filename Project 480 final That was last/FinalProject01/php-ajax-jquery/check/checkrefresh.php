<?php 
		

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$body=$_POST['body'];
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";
$bb = date("Y-m-d (h:i:sa)");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection


$sql = "INSERT INTO `justtry` (`id`, `body`, `Time`) VALUES (NULL, '$body','$bb')";

if (mysqli_query($conn, $sql)) {
    
} else {
   
}

mysqli_close($conn);
	}




?>