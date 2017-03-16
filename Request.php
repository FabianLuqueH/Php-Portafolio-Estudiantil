<!DOCTYPE html>
<html>
<head>
	<title>Formulario1</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
	<input type="submit">
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"]== "POST") {
	$name = $_REQUEST['fname'];
	if (empty($name)) {
		echo "Name is empty";
	}else {
		echo $name;
	}
}
 ?>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 Name: <input type="text" name="fname">
 	<input type="submit">

 </form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['fname'];
	if (empty($name)) {
		echo "Name is empty";
	}else{
		echo $name;
	}
}
 ?>
</body>
</html>