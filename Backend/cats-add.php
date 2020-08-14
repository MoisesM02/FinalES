<?php

include("db.php");

    if(isset($_POST['name'])){

        $name = strtolower(utf8_decode(mysqli_real_escape_string($connection, $_POST['name'])));
        $description = utf8_decode(mysqli_real_escape_string($connection,$_POST['description']));
        $query ="INSERT INTO categories (name, description) VALUES ('$name', '$description');";

        $result= mysqli_query($connection, $query);
        if(!$result){
            die("Query failed");
        }
        echo "Task added successfully";
    }

?>