<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Array Function</title>
</head>

<body>
<?php
	$age=array("01"=>"001","02"=>"002","03"=>"003");
	$age['010']="001";
	$age['020']="002";
	$age['030']="003";
	
	
	foreach($age as $x => $x_values){
		echo "keys = ".$x.",values = ".$x_values;
		$x_value;
    echo "<br>";
		
	}
	$shadhin=array(
			array("Volvo",22,18),
		array("BMW",15,13),
	array("Land Rover",17,15),
	);
	
		echo $shadhin [0][0]." : In stock: ".$shadhin[0][1].", sold: ".$shadhin[0][2];
	echo "<br>";
	echo $shadhin [1][0]." : In stock: ".$shadhin[1][1].", sold: ".$shadhin[1][2];
	echo "<br>";
	echo $shadhin [2][0]." : In stock: ".$shadhin[2][1].", sold: ".$shadhin[2][2];
	
	for($x=0;$x<count($shadhin);$x++){
		
		for($y=$x;$x<count($shadhin);$y++){
		
		echo $shadhin [0][0]." : In stock: ".$shadhin[0][1].", sold: ".$shadhin[0][2];
	echo "<br>";
	}
	}
	
	?>
</body>
</html>
<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>