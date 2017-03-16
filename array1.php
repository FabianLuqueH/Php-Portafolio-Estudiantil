<!DOCTYPE html>
<html>
<head>
	<title>array1</title>
</head>
<body>
<?php
/*sort () - matrices de clasificación en orden ascendente
matrices de clasificación en orden descendente - rsort ()
asort () - ordenar matrices asociativas en orden ascendente, de acuerdo con el valor
ksort () - ordenar matrices asociativas en orden ascendente, de acuerdo con la clave
arsort () - ordenar matrices asociativas en orden descendente, de acuerdo con el valor
krsort () - ordenar matrices asociativas en orden descendente, de acuerdo con la clave
*/

echo "<h1>ordenar array en orden ascendente </h1>";
 $cars = array("Volvo","BMW","Toyota" );

sort($cars);

$largo = count($cars);

	for ($x=0; $x < $largo ; $x++) { 
		echo $cars[$x];
		echo "<br>";
	}

echo "<h2>Al reves  </h2>";

$cars2  = array("Volvo","BMW","Toyota" );
rsort($cars2);

$largo2 = count($cars2);
	for ($i=0; $i < $largo2 ; $i++) { 
	echo $cars2[$i];
	echo "<br>";
}	

echo "<h3>ordenar en ascendente segun su indice</h3>";

$age = array("peter" =>"35", "ben"=>"37", "Joe"=>"43" );
	ksort($age); //or asort
	foreach ($age as $x => $x_value) {
		echo "Key=".$x. ", Value".$x_value;
		echo "<br>";
	}


?>
</body>
</html>