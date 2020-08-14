<?php

  include('database.php');
  if(empty($_FILES["imagen"])){
    echo "Hace falta un archivo o no es posible enviar ese archivo";
    print_r($_FILES);
 }else{
     $image = $_FILES["imagen"];
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
                    if(isset($_POST['name'])) {
                    $img = addslashes(file_get_contents($image["tmp_name"]));
                    $name = mysqli_real_escape_string($connection, utf8_decode($_POST['name']));
                    $description = mysqli_real_escape_string($connection,utf8_decode($_POST['description']));
                    $price = mysqli_real_escape_string($connection,$_POST['price']);
                    $place = mysqli_real_escape_string($connection, utf8_decode($_POST['place']));
                    $date = mysqli_real_escape_string($connection, utf8_decode($_POST['date']));
                    $query = "INSERT into tblproductos(Nombre, Descripcion, Imagen, Precio, Lugar, Fecha) VALUES ('$name', '$description','$img', $price, '$place', '$date');";
                    $result = mysqli_query($connection, $query);

                    if (!$result) {
                      die('Query Failed.' . mysqli_error($connection));
                    }

                    echo "Paquete agregado satisfactoriamente";  

                  }
             }                    
         }
     }
 }
?>