<!DOCTYPE html>
<html>
<head>
	<title>STATIC</title>
</head>
<body>
<?php
function myTest(){
	static $x = 0;
	echo $x."<br>";
	$x++;
}
//static guarda la variables local a pesar de estar dentro de una funcion , esto permite que cada vez que se ejecute esta funcion la variable venga con la variable aya declarada y sumada por su comando interior
myTest();
myTest();
myTest();
for ($i=0; $i < 10 ; $i++) { 
	myTest();
	# code...
}
?>
</body>
</html>