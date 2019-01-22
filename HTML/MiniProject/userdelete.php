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
    if(isset($_GET['email']) != "") {
        $delete = $_GET['email'];
        $delete = mysqli_query($conn, "DELETE FROM register WHERE email = '$delete'");
        if($delete) {
            header("Location:admin.php");
        } else {
            echo mysqli_error($conn);
        }
    }
?>