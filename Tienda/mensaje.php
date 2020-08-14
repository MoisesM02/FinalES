<?php  
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera2.php';
?>

<?php 

session_destroy();
$mensaje = "<h3>Pago Aprobado</h3>"; 

?>

<div class="jumbotron">

    <h1 class="display-4">¡ Listo !</h1>

    <hr class="my-4">

    <p class="lead"><?php  echo $mensaje?></p>

    
</div>