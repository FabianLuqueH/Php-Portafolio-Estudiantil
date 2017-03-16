<!DOCTYPE html>
<html>
<head>
	<title>Switch</title>
</head>
<body>
<?php
$favcolor = "red";
	switch ($favcolor) {
		case 'blue':
			echo "Your favorite color is blue!";
			break;
		case 'red':
			echo "Your favorite color is red!";
		
			break;
		case 'green':
			echo"Yout favorite color is green";
			break;
		default:
			# code...
			break;
	}
?>
</body>
</html>