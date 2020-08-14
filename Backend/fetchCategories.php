<?php
    include('db.php');

    $query = "SELECT * FROM categories;";
    
    $result = mysqli_query($connection, $query);
    if($result){
        $json = [];
        while($row = mysqli_fetch_array($result)){
            $json[]= array(
                'id' => $row['id'],
                'category' => utf8_encode(ucfirst($row['name']))
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
    else
    die("Query failed". mysqli_error($connection));
    
?>