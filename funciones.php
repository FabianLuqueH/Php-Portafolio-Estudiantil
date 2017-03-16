<!DOCTYPE html>
<html>
<head>
	<title>Funciones</title>
</head>
<body>
<?php 
function writeMsg()
{
	echo "Hello World!";
}

writeMsg();
echo "<br>";

function familyName($fname){
	echo "$fname Luque.<br>";
}

familyName("Jani");
familyName("hege");
familyName("stale");
familyName("kai jim");
familyName("borge");
familyName("Fabian");

echo "<br>";

function familyNames($fnames , $year){
	echo "$fnames Luque. born in $year <br>";
}
familyNames("Hege", "1973");
familyNames("stale","1978");
familyNames("Fabian","1997");
 echo "<br>";

 echo "<h1>Funcion con un argumento de por defecto</h1>";
 function setHeight($minHeight = 50){
 	echo "The height is : $minHeight <br>";
 }
 setHeight(350);
 setHeight();//se setea el valor si uno lo asigna al invocar el metodo
 setHeight(135);
 setHeight(80);
echo "<h2>Devolución de valores</h2>";
 
function sum($x, $y){
	$z = $x + $y;
	return $z;
}

echo "5 + 10 = ".sum (5,10). "<br>";
echo "7 + 13 = ".sum (7,13). "<br>";
echo "2 + 4 = ". sum (2,4). "<br>";

 ?>


</body>
</html>