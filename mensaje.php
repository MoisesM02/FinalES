<?php  
include 'Tienda/global/config.php';
include 'Tienda/global/conexion.php';
include 'Tienda/carrito.php';
include 'Tienda/templates/cabecera4.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrito</title>
    
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="icon" type="image/png" href="LoginPTC/images/logoicono.png">
 <?php 
session_destroy();
$mensaje = "<h3>Pago Aprobado</h3>"; 

?>

<div class="jumbotron">

    <h1 class="display-4">¡ Listo !</h1>

    <hr class="my-4">

    <p class="lead"><?php  echo $mensaje?></p>

    
</div>

<?php include 'Tienda/templates/pie.php';?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/editCats.js"></script>


</body>
</html>    
