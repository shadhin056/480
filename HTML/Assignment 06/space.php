<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><?php
   

$foo = "Dave  Smith";
$bar = "SamSp ade";
$baz = "Dave\t\t\t      Smith";

var_dump(preg_match('/\s/',$foo));
var_dump(preg_match('/\s/',$bar));
var_dump(preg_match('/\s/',$baz));
?> 
</body>
</html>