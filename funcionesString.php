<!DOCTYPE html>
<html>
<head>
	<title>Funciones de String</title>
</head>
<body>
<?php
//obtener la longitud de una cadena
echo strlen("Hello world!");
echo "<br>";
//obtener la cantidad de palabas de una cadena
echo str_word_count("Hello world thug");
echo "<br>";
echo strrev("Hello world!");
echo "<br>";
echo strpos("Fabian luque hormazabal", "luque");
echo "<br>";
echo str_replace("Ignacio", "Fabian", "Ignacio luque");
?>

<h1>referencia </h1>
<a href="https://www.w3schools.com/php/php_ref_string.asp" target="_blank">Link</a>
</body>
</html>