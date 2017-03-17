<?php 
setcookie("Prueba_cookie", "prueba", time() + 3600, '/');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php 
if (count($_COOKIE) > 0) {
	echo "La cookie esta habilitada.";
}else
{
	echo "La cookiees estan deshabilitadas.";
}
  ?>
 </body>
 </html>