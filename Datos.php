<!DOCTYPE html>
<html>
<head>
	<title>TIPOS DE DATOS</title>
</head>
<body>
<?php
$x = 5985;
var_dump($x);

$y = 10.365;
var_dump($y);

$v = true;
$f = false;

$cars = array('Volvo','BMW','Toyota');
var_dump($cars);
/**
* 
*/
echo "<h1>Array</h1><br>";
class Car 
{
	
	function Car()
	{
		$this-> model = "VM";
	}
}
//crear el objeto
$herbie = new Car();

//mostrar las propiedades del objeto
echo $herbie->model;
echo"<h2>variables null </h2>";
$a = "Hello world";
$a = null;
var_dump($a);
?>

</body>
</html>