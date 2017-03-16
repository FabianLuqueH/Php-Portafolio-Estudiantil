<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php $cars = array
(
array("Volvo",22,18),
array("BMW", 15,13 ),
array("Saab",5,2),
array("Land Rover",17,15)
);
echo $cars [0][0]."In Stock: ".$cars[0][1].", Sold: ".$cars[0][2].".<br>";
echo $cars [1][0]."In Stock: ".$cars[1][1].", Sold: ".$cars[1][2].".<br>";
echo $cars [2][0]."In Stock: ".$cars[2][1].", Sold: ".$cars[2][2].".<br>";
echo $cars [3][0]."In Stock: ".$cars[3][1].", Sold: ".$cars[3][2].".<br>";
echo "<h1>For </h1>";

for ($row=0; $row < 4  ; $row++) { 
	echo "<p><b>Row number $row</b></p>";
	echo "<ul>";
	for ($col=0; $col < 3 ; $col++) { 
		echo "<li>".$cars [$row] [$col]."</li>";
	}
	echo "</ul>";
}

?>
</body>
</html>
