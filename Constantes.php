<!DOCTYPE html>
<html>
<head>
	<title>Constantes</title>
</head>
<body>
<?php
	define("GREETING","Welcome to W3Schools.com!");
	echo GREETING ;
	echo "<br>";

	define("Fabian", "Welcoma Fabian!", true);
	echo Fabian;
	echo "<br>";

	define("Luque", "Welcome Luque!");
	function myTest(){
		echo Luque;
	}

	myTest();
?>
</body>
</html>