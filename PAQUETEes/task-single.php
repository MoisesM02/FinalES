<?php

include('database.php');

if(isset($_POST['id'])) {
  $id = mysqli_real_escape_string($connection, $_POST['id']);

  $query = "SELECT * from tblproductos WHERE ID = $id";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }else{
     $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'name' => utf8_encode($row['Nombre']),
      'description' => utf8_encode($row['Descripcion']),
      'id' => $row['ID'],
      'image' => base64_encode($row['Imagen']),
      'price' => $row['Precio'],
      'place' => utf8_encode($row['Lugar']),
      'date' => $row['Fecha']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
  }

}

?>