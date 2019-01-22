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
        
        $admin = $_GET['email'];
        $sql1="SELECT register.Password FROM register WHERE register.Email = '$admin'";
        $add2 = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_array($add2);
        $pnew=$row['Password'];
        $sql = "INSERT INTO admin (aEmail,Password ,wcan) VALUES ('$admin','$pnew' ,'abc')";
        $add = mysqli_query($conn, $sql);
        if($add) {
            header("Location:admin.php");
        } else {
            echo mysqli_error($conn);
        }
    }
?>