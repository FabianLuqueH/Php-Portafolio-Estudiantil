<?php 
$cookie_name = "Usuario"; //Nombre de la cookie 
$cookie_value= "Jhon Doe"; // Nombre propietario de la cookie
setcookie($cookie_name, $cookie_value,time()+ (86400 * 30),"/");//86400 = 1 dia
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php 
if (!isset($_COOKIE[$cookie_name])) {
	echo "Nombre de la cookie '".$cookie_name ."' no esta establecida!";
}else {
	echo "Cookie'" . $cookie_name ."' iesta establecida!<br>";
	echo "su valor es: ". $_COOKIE[$cookie_name];
}
  ?>
  <p><h1>Nota:</h1> Hay que recargar la pagina para que se guarde la cookie y la muestre</p>
 </body>
 </html>