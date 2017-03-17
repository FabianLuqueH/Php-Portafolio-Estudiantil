<?php 
$nombre_cookie = "usuario";
$valor_cookie ="Junito Perez";
setcookie($nombre_cookie, $valor_cookie, time()+(86400 * 30),"/");// establece la cantidad de dias que se mantendra la cookie

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php 
if (!isset($_COOKIE[$nombre_cookie])) {
	echo "Nombre de la cookie '". $nombre_cookie ."' no esta establecida";
}else{
	echo "Cookie '" . $nombre_cookie ."' esta establecida!<br>";
	echo "Su valor es : ". $_COOKIE[$nombre_cookie];
}
  ?>
 </body>
 </html>