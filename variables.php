<!DOCTYPE html>
<html>
<head>
	<title>VARIABLES</title>
</head>
<body>
<?php
$x = 5;
$Y = 10;

function mytest(){
	global $x, $Y;
	$Y = $x + $Y;
}

mytest();
echo $Y."<br>";



$a = 6;
$b = 4;
function mytest1(){
	$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
mytest1();
echo $b;
?>
</body>
</html>