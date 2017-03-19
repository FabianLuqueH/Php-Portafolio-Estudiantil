<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
//Tomaremos las variables cargadas antes!
echo "Color favorito es: ".$_SESSION["favcolor"]. ".<br>";
echo "Animal favorito es: ".$_SESSION["favanimal"]. ".<br>";
// tambien podemos mostrar todos los valores en la variable secion con 
print_r($_SESSION);
//modificar las variables de secion
$_SESSION["favcolor"] = "amarillo";
echo "variables modificadas exitosamente";
print_r($_SESSION);
//Eliminar todos los registros de estas variables
// eliminar todas las variables de session
session_unset();
echo "las variasbles de session han sido eliminadas<br>";
print_r($_SESSION);
//eliminar solo la session
session_destroy();
 ?>


</body>
</html>