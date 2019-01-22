

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="mystyle3.css">
        <style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>
	<div class="container">
		<header>
		</header>
		<article>
<?php 
session_start();

if(isset($_SESSION['email22'])){
    $ami=$_SESSION['email22'];
    echo "you logged in as </br>", $_SESSION['email22'];
    echo "<br/><a href='logout.php'>logout</a>";
}
else{header("Location: Login.php");
}?> 
                    <?php
                    if($ami=='shadhinemail@gmail.com'){
                        echo ' <br>super user ';
                        
                    }
                    
                    ?>
                    
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

$sql = "SELECT DISTINCT  register.Full_name,register.Nick_name,register.Gender,register.Email,register.Phone,register.Birthday,register.Password FROM register INNER JOIN admin where register.Email NOT IN (SELECT admin.aEmail FROM admin)";
$result = mysqli_query($conn, $sql);
//
echo "<h1>Total User </h1> ";
?>
            <table>
          <tr>
              <th>Full name</th>
              <th>Nick name</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Birthday</th>
              <th>Password</th>
              <th>Action</th>
          </tr>
           <?php echo "<tr>";?>
        <?php while($row = mysqli_fetch_array($result)){ ?>
          
              <td><?php echo $row['Full_name']; ?></td>
              <td><?php echo $row['Nick_name']; ?></td>
              <td><?php echo $row['Gender']; ?></td>
              <td><?php echo $row['Email']; ?></td>
              <td><?php echo  $row['Phone']; ?></td>
              <td><?php echo $row['Birthday']; ?></td>
              <td><?php echo $row['Password']; ?></td>
              <td>
                  <a href="admincanview.php?email=<?php echo $row['Email']; ?>"><span class="view" title="View"> View</span></a> /
                  <a href="useradmin.php?email=<?php echo $row['Email']; ?>" onclick="return confirm('Are you sure you wish to Add this Record?');">
                      <span class="delete" title="admin"> Add to admin </span> /</a>
                   <a href="userdelete.php?email=<?php echo $row['Email']; ?>" onclick="return confirm('Are you sure you wish to delete this Record?');">
                      <span class="delete" title="Delete"> Delete</span>
                  </a>
              </td>
          </tr>
        <?php }?>
      </table>        
                    
                   

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

$sql ="select DISTINCT * from admin where wcan='abc'";
$result = mysqli_query($conn, $sql);
//
echo "<h1>Total Admin </h1> ";
?>
            <table>
          <tr>
              <th>Email</th>
              <th>Action</th>
          </tr>
           <?php echo "<tr>";?>
        <?php while($row = mysqli_fetch_array($result)){ ?>
          
              
              <td><?php echo $row['aEmail']; ?></td>
              <td>
                  <a href="admincanview.php?email=<?php echo $row['aEmail']; ?>"><span class="view" title="View"> View</span></a> /
                 
                  <a href="removeAdmin.php?email=<?php echo $row['aEmail']; ?>" onclick="return confirm('Are you sure you wish to delete this Record?');">
                      <span class="delete" title="Delete"> Remove from admin</span>
                  </a>
              </td>
          </tr>
        <?php }?>
      </table>        
                  
			<a href="CV.php" class="button">Go to my Wall</a>
                        <a href="logout.php" class="button">Logout</a>
		</article>
		<footer style="clear: both;">Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>