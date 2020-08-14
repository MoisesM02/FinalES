<?php
include("db.php");

if(isset($_POST)){
    $response = [
        'message' => "",
        "puntuacion" => "" 
    ];
    $username = mysqli_real_escape_string($connection, utf8_decode($_POST["user"]));
    $place = mysqli_real_escape_string($connection, utf8_decode($_POST["plc"]));
    $rating = $_POST["rate"];

    $checkExistRating = "SELECT * from puntuaciones WHERE usurio = '$username' && lugar = '$place'";

    $executeQuery = mysqli_query($connection, $checkExistRating);
    if(mysqli_num_rows($executeQuery)>0){
        $updateUserRating = "UPDATE puntuaciones SET puntuacion = $rating where usurio = '$username' && lugar = '$place'";
        $updating = mysqli_query($connection, $updateUserRating);
        if($updating){
            $queryProm="SELECT avg(puntuacion) as Prom FROM puntuaciones where lugar = '$place'";
            $newAvg = mysqli_fetch_array(mysqli_query($connection, $queryProm));
            $avgForQuery = $newAvg['Prom'];
            $prom = number_format( $avgForQuery , $decimals = 1 ,  $dec_point = "." ,  $thousands_sep = "," );
            $queryUpdate = "UPDATE places set rating = $prom where name = '$place'";
            $result = mysqli_query($connection, $queryUpdate);
            if($result){
            $response["message"]="Su calificación ha sido actualizada correctamente. Nueva calificación: $rating";
            $response["puntuacion"] = $rating;
            $jsonFomat = json_encode($response);
            echo $jsonFomat;
        }else{
            echo "Lo sentimos. Hemos tenido problemas actualizando su puntuación de este lugar.";
        }

        }else{
            echo "Lo sentimos, hemos tenido problemas actualizando su puntuación de este lugar.";
        }
    }else{
        $query = "INSERT INTO puntuaciones (puntuacion, usurio, lugar) VALUES ('$rating', '$username', '$place');";
        $resultado = mysqli_query($connection, $query);
        if($resultado){
            $queryProm="SELECT avg(puntuacion) as Prom FROM puntuaciones where lugar = '$place'";
            $newAvg = mysqli_fetch_array(mysqli_query($connection, $queryProm));
            $avgForQuery = $newAvg['Prom'];
            $prom = number_format( $avgForQuery , $decimals = 1 ,  $dec_point = "." ,  $thousands_sep = "," );
            $queryUpdate = "UPDATE places set rating = $prom where name = '$place'";
            $result = mysqli_query($connection, $queryUpdate);
            if($result){
                $response["message"] ="Su puntuación ($rating) se ha asignado correctamente.";
                $response["puntuacion"] = $rating;
                $jsonFomat = json_encode($response);
                echo $jsonFomat;
            }else{
                echo "Lo sentimos, estamos teniendo problemas para realizar esta acción.";
            }
        }else{
            echo "Lo sentimos. Estamos teniendo problemas para realizar esta acción.";
        }
    }
}else{
    echo "No hemos podido obtener todos los datos";
}


?>