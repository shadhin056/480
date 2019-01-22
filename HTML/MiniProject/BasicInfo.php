<?php
// Start the session
session_start();

if(isset($_SESSION['email22'])){
    echo "you logged in as </br>", $_SESSION['email22'];
    echo "<br/><a href='logout.php'>logout</a>";
}else{header("Location: Login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>

<ul>
    <li><a class="active" href="BasicInfo.php">
    Basic Information
  </a></li>
  <li><a href="#home">
    Profile
  </a></li>
  <li><a href="#news">
    Contact Information
  </a></li>
  <li><a href="#contact">
    Activities & Interest
  </a></li>
  <li><a href="#about">
    Education And Qualification
  </a></li>
  <li><a href="#about">
    Skills
  </a></li>
  <li><a href="#about">
    Work Experience
  </a></li>
  <li><a href="#about">
    About Me
  </a></li>
  
  <li style=" background: #CFA6CD"><a href="BasicUp.php?email22=<?php echo $row['email22'];?>">
    Edit/Update this Info
  </a></li>
  <li style=" background: #CFA6CD"><a href="CV.php">
    Home
  </a></li>
  <li style=" background: #CFA6CD"><a href="logout.php">
    Logout
  </a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <?php 
	//echo $_SESSION['email22'];
	$getIDlogin=$_SESSION['email22'];
	    
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

$sql = "SELECT * FROM register where email = '$getIDlogin'";
$result = mysqli_query($conn, $sql);
//
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
                
                echo  $row['Full_name'];
                echo  $row['Nick_name'];
                echo  $row['Gender'];
			
			echo $row['Email'];
                echo $row['Phone'];
                echo $row['Birthday'];
                echo $row['Password'];
			
        // Free result set. mysqli_free_result() function frees the memory associated with the result.
        mysqli_free_result($result);
	mysqli_close($conn);
	?>
  <p>Some text..</p>
</div>

</body>
</html>
