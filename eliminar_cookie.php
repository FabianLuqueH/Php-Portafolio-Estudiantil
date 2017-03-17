<?php 
// establece una hora de caducidad hace una hora
setcookie("usuario","",time() - 3600);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php 
echo"La cookie 'Usuario' Se elimino.";
  ?>
 </body>
 </html>