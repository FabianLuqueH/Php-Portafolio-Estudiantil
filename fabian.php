<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
unction muestra($fabi){
		if ($fabi < 0.5) 
			$color = "red";
		 else 
			$color = "blue";
			echo "<td><font color='$color'>$vfabi,</font></td>\n";
			echo "Fabian Luquebn";
		
	}
?>
<table border="1">
<?
	for ($x=0; $x<= 2 ; $x+=0.01) { 
		echo "<tr>";
		muestra($x);
		muestra(sin($x));
		muestra(cos($x));
		echo "</tr>";
	}
?>

</body>
</html>