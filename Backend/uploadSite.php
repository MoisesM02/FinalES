<?php 

include("db.php");
if(empty($_FILES["image"])){
   echo "Hace falta un archivo o no es posible enviar ese archivo";
}else{
    $image = $_FILES["image"];
//Validar el tamaño de la imagen
    $maxSize = 5*10e6;
    if($image["size"] > $maxSize){
        echo "The image size is more than 5MB";
    }else{
//Validar la imagen
        $imageData = getimagesize($image["tmp_name"]);
        if(!$imageData){
            echo "imagen no válida";
        }else{
//Validar formato de imagen
            $mimeType = $image['type'];
            $allowedMimeTypes = ["image/jpg", "image/png", "image/jpeg"];
            if(!in_array($mimeType, $allowedMimeTypes)){
                echo "Solo se admiten archivos .jpg y .png (su archivo es formato $mimeType)";
            }else{
//Preparar las variables para ejecutar sql
                $img = addslashes(file_get_contents($image["tmp_name"]));
                $description = mysqli_real_escape_string($connection,utf8_decode(htmlspecialchars(trim($_POST["desc"]))));
                $name = mysqli_real_escape_string($connection,utf8_decode(htmlspecialchars($_POST["name"])));
                $location = mysqli_real_escape_string($connection,utf8_decode(htmlspecialchars($_POST["location"])));
                $info = mysqli_real_escape_string($connection, utf8_decode($_POST["info"]));
                $cat = mysqli_real_escape_string($connection,utf8_decode(htmlspecialchars($_POST["category"])));


                $sql ="Insert into places (name, description, image, rating, location, category, info) Values ('$name', '$description', '$img', 5.0, '$location', '$cat', '$info');";
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "Added successfully";
                }else{
                    echo "Algo salió mal. Inténtelo nuevamente."; 
                }
            }                    
        }
    }
}

?>