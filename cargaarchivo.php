<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["archivo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

//$ uploadOk ==> 0 falso

//$ uploadOk ==> 1 verdadero


if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["archivo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
    	echo "Archivo ya existe en la carpeta.";
    	$uploadOk = 0;
	}

	if ($_FILES["archivo"]["size"] > 500000) {
	    echo "Muy Grande el archivo a subir";
	    $uploadOk = 0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    	$uploadOk = 0;//solo acepta imagenes
	}

	if ($uploadOk == 0) {
    	echo "No se subio el archivo por no cumplir los requisitos";
	} else {
	    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
	        echo "El archivo ". basename( $_FILES["archivo"]["name"]). " se subio con exito.";
	    } else {
	        echo "Lo siento, ocurrio un error al intentar subir el archivo";
	    }
	}
}
?>