<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values




if ($_POST) {
  
  
   $error = array();
   
  if (empty($_POST["id"])) {
    $error[id] = "id is required";
  } else {
    $id = test_input($_POST["id"]);
  }
  
  if (empty($_POST["pass"])) {
    $error[pass] = "input password";
  } else {
    $pass = $_POST["pass"];
  }
  
  
  if (empty($_POST["pass_c"])) {
    $error[pass] = "confirm password";
  } else {
    $pass_c = $_POST["pass_c"];
  }
  
  
  
  if(pass!=pass_c){
  
  	 $error[pass] = "password didnl't match";
  }
  
  
  
  
  
  
  
  
  if (empty($_POST["name"])) {
    $error[name] = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $error[name] = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $error[email] = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error[email] = "Invalid email format"; 
    }
  }
  
  
   //check errors
        if(count($errors) == 0)
        {
            //redirect to success pages
            header("Location: success_reg.php");
            exit();
        }
    
	/*
	
  if (empty($_POST["contact"])) {
    $error[contact]= "";
  } else {
    $contact = test_input($_POST["contact"]);
  }



  if (empty($_POST["gender"])) {
    $error[gender] = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  */
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>REGISTRATION</h2>
<p><span class="error">* required field.</span></p>
<form method="post" target="">

	ID<br> <input type="text" name="id" value="<?php echo $id;?>">
  <span class="error">* <?php echo  $error[id];?></span>
  <br><br>
    
	Password<br> <input type="text" name="pass" value="<?php echo $pass;?>">
  <span class="error">* <?php echo  $error[pass];?></span>
  <br><br>
    
	Confirm Password<br> <input type="text" name="pass_c" value="<?php echo $pass_c;?>">
  <span class="error">* <?php echo  $error[pass_c];?></span>
  <br><br>
    
	
  Name<br> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo  $error[name];?></span>
  <br><br>
  
  E-mail<br> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo  $error[email];?></span>
  <br><br>
  
   <label>User Type</label> <br>
  <select name="user_type">
    <option value="user">user</option>
    <option value="admin">admin</option>
  </select>
  
  <!--
  Contact: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo  $error[contact];?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  -->
  <br>
  <input type="submit" name="submit" value="Submit">
    
</form>


<?php
echo "<h2>Your Input:</h2>";

echo $id;
echo "<br>";
echo $pass;
echo "<br>";
echo $pass_c;
echo "<br>";

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $user_type;
echo "<br>";



?>


</body>
</html>