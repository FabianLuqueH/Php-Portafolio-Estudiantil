<!DOCTYPE html>
<html>
<head>
	<title>Calculos</title>
</head>
<body>
<h1>Calculos, redondeo y formatos</h1>
<?php

	//Primero declaramos las variables
	$precioneto = 101.98;
	$iva = 0.196;
	$resultado= $precioneto * $iva;
echo "El precio es de ";
echo $precioneto;
echo "Y el iva el ";
echo $iva;
echo "% <br>";
echo "resultado:";
echo round($resultado,2);
echo " con ROUND()<br>";
echo $resultado;
echo "normal\n";
echo "<br> <br>";
$resultado2 = sprintf("%01,2f",$resultado);
echo "Usando la funcion sprintf se ve asi:";
echo $resultado
?>




</body>
</html>