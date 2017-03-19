<?php 
// inicio de la secion 
session_start();// debe ser lo primero 	que agregamos!

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php $_SESSION["favcolor"] = "verde";
 $_SESSION["favanimal"] = "gato";
echo "Las variables de session han sido cargadas!";
 ?>
 </body>
 </html>