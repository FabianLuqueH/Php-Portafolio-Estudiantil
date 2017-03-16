<!DOCTYPE html>
<html>
<head>
	<title>practica 6</title>
</head>
<body>
<?php
	$num = rand(1,100);

	echo "El valor generado por la funcion RAND  es: ",$num," \n <br>";
	if ($num <= 50) {
		echo "El numero es menor o igual a 50";
	}
	else{
		echo "El numero es mayor a 50";
	}
?>
</body>
</html>