<!DOCTYPE html>
<html>
<head>
	<title>Looops</title>
</head>
<body>
<?php
	$x = 1;
	$y = 1;
	echo "El siguiente loops es de WHILE<br>";
	while ($x <= 5) {
		echo "The number is: $x <br>";
		$x++;
	}

	echo"<br>";

	echo "El siguiente loops es de Do..while ";
	echo"<br>";
	do{
		echo"The number is: $y <br>";
		$y++;
	}while ($y <= 5);
	// a diferencia de el bluque while este ejecuta almenos una vez la accion del do y luego la verifica ejemplo:
	echo "Ejemplo ";
	echo"<br>";
	$a = 6;
	do {
		echo "The number is: $a <br>";
		$x++;
		} while ($a <= 5);	
	
	echo "<h1>ejemplo de for</h1>";
	echo "<br>";
	for ($x=0; $x <= 10 ; $x++) { 
		echo "The number id: $x <br>";
	}

	echo "<h2>Ejemplo foreach </h2>";
	echo "<br>";
	$color = array('red','green','blue');

	foreach ($color as $value) {
		echo"$value <br>";
	}
?>
</body>
</html>