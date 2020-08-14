<?php

   include('db.php');

    //Decalración de variables
     if(isset($_POST['commentID']))
     {$id = $_POST['commentID'];

    //Creación de query

    $query = "DELETE from comentarios WHERE id = $id ";

    //Ejecutamos la query
    $result = mysqli_query($connection, $query);

    $message = [];
    if($result){
        $message = [
            'type' => 'success',
            'msg' => 'Comentario eliminado correctamente'
        ];
    }else{
        $message = [
            'type' => 'error',
            'msg' => 'Lo sentimos. Tuvimos problemas para eliminar su comentario. Inténtelo nuevamente.'
        ];
    }
    echo json_encode($message);}

?>