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

$sql = "SELECT * FROM register ";
$result = mysqli_query($conn, $sql);
//
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table >";
            echo "<tr>";
                echo "<th>Full name</th>";
                echo "<th>Nick name</th>";
                echo "<th>Gender</th>";
		        echo "<th>Email</th>";
                echo "<th>Phone</th>";
                echo "<th>Birthday</th>";
                echo "<th>Password</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['Full_name'] . "</td>";
                echo "<td>" . $row['Nick_name'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";
			
			echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
                echo "<td>" . $row['Birthday'] . "</td>";
                echo "<td>" . $row['Password'] . "</td>";
			
            echo "</tr>";
        }
        echo "</table>";
        // Free result set. mysqli_free_result() function frees the memory associated with the result.
        mysqli_free_result($result);
    } else{
        echo "No records Found";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}			
			
			
//
	mysqli_close($conn);
?>
			
		</article>
		<footer style="clear: both;">Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>