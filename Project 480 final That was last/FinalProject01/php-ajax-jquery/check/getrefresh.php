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
$sql = "SELECT * FROM `justtry`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row55 = mysqli_fetch_assoc($result)) {
       echo $s=$row55['body'];
       echo $s=$row55['Time'];
		
    }
} else {
    echo "0 results";
}
mysqli_close($conn);


?>