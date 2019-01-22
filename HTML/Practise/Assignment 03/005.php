<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Chess Board</title>
<style>
	
th, td {
    border: 1px solid black;
    border-collapse: none;
}
th, td {
    padding: 5px;
}
	td{
		
		background-color:#000000;
	}
th {
    text-align: left;
	
	background-color:#F5F5F5;
}
	th,td{
		
	height=90px;
	width=50px ;
	}
</style>
</head>

<body>
<table style="width:270px cellspacing="0px" cellpadding="0px" border="1px"">
<?php
$ami=0;
 for($i=0;$i<4;$i++){
  echo "<tr><th></th><td></td> 
    <th></th><td></td><th></th><td></td><th></th><td></th><th></th>
  </tr>";
echo "<tr><td></td><th></th> 
    <td></td><th></th><td></td><th></th><td></td><th></th><td></td>
  </tr>";
  
  }
	echo "<tr><th></th><td></td> 
    <th></th><td></td><th></th><td></td><th></th><td></th><th></th>
  </tr>";

?>
</table>
</body>
</html>