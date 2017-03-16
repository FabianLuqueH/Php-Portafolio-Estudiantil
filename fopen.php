<?php $myfile = fopen("archivo.txt", "r") or die ("Unable to open file!");
echo fread ($myfile,filesize("archivo.txt"));
fclose($myfile); ?>

<?php 
echo "<h1> Siguiente </h1>";
$myfile = fopen("archivo.txt", "r") or die ("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
 ?>


 <?php
echo "<h1> Siguiente </h1>";
  $myfile = fopen("archivo.txt", "r") or die("Unable to open file!");

 while (!feof($myfile)) {
  	echo fgets($myfile)."<br>\n";
  } 
fclose($myfile);
  ?>

  <?php 
echo "<h1> Siguiente </h1>";
$myfile = fopen("archivo.txt", "r") or die ("Unable to open file!");
while (!feof($myfile)) {
	echo fgetc($myfile);
}
fclose($myfile);
   ?>
   