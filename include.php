<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="menu"><?php include 'menu.php'; ?></div>
<h1>Welcome to my home page!</h1>
<h2>Incluir</h2>
<?php include 'vars.php';
echo "I Have a $color $car."; ?>
<p>Some text.</p>
<p>Some more text.</p>

<h2>Requerir</h2>
<?php require 'noFileExists.php';
echo "I have a $color $car."; ?>
<?php include 'footer.php'; ?>
</body>
</html>