<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
    <?php 
	
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";
		
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT mphoto FROM register WHERE Email='shadhinemail@gmail.com'";
	
$result = $conn->query($sql);

if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo  $row["mphoto"];
    }
} else {
    echo "0 results";
}
$conn->close();
	
	
	
	
	
	?>
<body>

 <img src="<?php echo $row["mphoto"] ?>"  height="100%"; width="100%" alt="Avatar" >



</body>
</html>