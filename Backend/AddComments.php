<?php
//Comments.js hace peticiones a este archivo

include('db.php');

//declaración de variables
try {
$place = mysqli_real_escape_string($connection, utf8_decode($_POST['place']));
$comment = mysqli_real_escape_string($connection, utf8_decode(htmlspecialchars($_POST['comment'])));
$username = mysqli_real_escape_string($connection, htmlspecialchars(utf8_decode($_POST['username'])));

//obtenemos la fecha y hora actual del servidor
date_default_timezone_set('America/El_Salvador');
$date = date('d \d\e F \d\e Y h:i:s a', time());

}catch(Exception $e){
    echo "Something went wrong :(";
}


//Creación de query
$query = "Insert into comentarios (username, comment, date, place) VALUES ('$username', '$comment', '$date', '$place');";
if($comment != "" && $username != "" && $place != ""){
    $result = mysqli_query($connection, $query);
    echo ($result)? "Comentario añadido correctamente": "Algo falló, lo sentimos";
}else{
    
    $msg = [
        'type' => 'error',
        'message' => $comment.$username.$place
    ];

    echo json_encode($msg);
}
?>