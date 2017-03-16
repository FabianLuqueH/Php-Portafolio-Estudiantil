<!DOCTYPE html>
<html>
<head>
	<title>array</title>
</head>
<body>
<?php 
$cars = array("Volvo", "BMW","Toyota");
echo "I Like ".$cars[0]. " , ".$cars[1]. " and " .$cars[2].".<br>";
echo count($cars);
echo "<h1>recorrer un array</h1>";
$arrlength = count($cars);// proceso para recorrer un array 
for ($x = 0; $x < $arrlength; $x++) {
	echo $cars[$x];// el indice del array es seteado por el numero de la variable x del for
	echo "<br>";
}
echo "<h2>Array asociativo</h2>";
$age = array("peter"=>"35","ben"=>"37","joe"=>"43");
echo "Peter is ".$age[peter]." years old.";

echo "<h3> Recorrer array con matriz asociativa</h3>";
foreach ($age as $x => $x_value) {
	// key es lo que contiene el arreglo y value es la posicion
	echo "key=".$x. ", value=" . $x_value;
	echo "<br>";
}
 ?>
</body>
</html>