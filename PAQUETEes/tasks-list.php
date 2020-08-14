<?php

  include('database.php');

  $query = "SELECT * from tblproductos";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'name' => utf8_encode($row['Nombre']),
      'description' => utf8_encode($row['Descripcion']),
      'id' => $row['ID'],
      'price' => $row['Precio'],
      'image' =>base64_encode($row['Imagen'])
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>