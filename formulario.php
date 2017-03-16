<?php 
$name = $email = $gender = $comment = $website= "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name = test_input($_POST["Nombre"])
	$email = test_input($_POST["correo"])
	$website = test_input($_POST["web"])
	$comment = test_input($_POST["comentario"])
	$gender = test_input($_POST["Genero"])
}
function test_input($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data =htmlspecialchars($data);
	return $data;
}
 ?>