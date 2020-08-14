<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Editar o Eliminar Sitios</title>
<link rel="stylesheet" href="css/editSitios.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="icon" type="image/png" href="LoginPTC/images/logoicono.png">
</head>
<style>
.line-clamp p, .line-clamp{
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
<body>
    <?php   
        include 'Tienda/templates/cabecera2.php';
        include('Backend/db.php')

    ?>
    <div class="container">
        <div class="table-wrapper">
            <form method="post" action="editSitios.php">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Editar Sitios</b></h2>
                    </div>
                    <div class="col-sm-6">
                        
                        <input type="submit" name="editar" value="Editar Registros" class="btn btn-success" data-toggle="modal"/>
                        
                        <input type="submit" name="borrar" value="Eliminar Registros" class="btn btn-danger" data-toggle="modal" />

                        <button class="btn btn-danger" data-toggle="modal" >Recargar Página</button>

                    </div>
                </div>
            </div>

           
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th style="font-size: 100%;">ID</th>     
                        <th style="font-size: 100%;">Nombre</th>
                        <th style="font-size: 100%;">Descripción</th>
                        <th style="font-size: 100%;">Calificación</th>
                        <th style="font-size: 100%;">Locación</th>
                        <th style="font-size: 100%;">Categoría</th>
                        <th style="font-size: 100%;">Información</th>
                        <th style="font-size: 100%;">Seleccionar</th>
                        <th></th>

                    </tr>

                    <?php 

                        $sql="SELECT * from places";
                        $result=mysqli_query($connection,$sql);
                        while($mostrar=mysqli_fetch_array($result)){

                     ?>
                    <tr>
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo utf8_encode($mostrar['name']); ?></td>
                        <td><p class="line-clamp"><?php echo utf8_encode($mostrar['description']); ?></p></td>
                        <td><?php echo $mostrar['rating']; ?></td>
                        <td><?php echo utf8_encode($mostrar['location']); ?></td>
                        <td><?php echo utf8_encode($mostrar['category']); ?></td>
                        <td class="line-clamp"><p class="line-clamp"><?php echo urldecode($mostrar['info']);?> </p></td>
                        <?php echo "<td> <input type='checkbox' name='eliminar[]' value='".$mostrar['id']."'/> </td>"; ?>
                        <td><a href="modificarSitio.php?parametro=<?php echo $mostrar['id']; ?>"><i class="material-icons" data-toggle="tooltip" title="Editar elemento">&#xE254;</i></a></td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <?php 
                 }
                 ?>
            </table>
            <?php 

                if (isset($_POST['borrar'])) 
                {
                    if (empty($_POST['eliminar'])) 
                    {
                        echo "<script>
                              alert('Debe Seleccionar al menos un elemento para eliminar.');
                              windows.location.href= 'editSitios.php'
                              </script>";
                    }
                           else
                          {
                                   foreach ($_POST['eliminar'] as $id_borrar) 
                                 {
                                    $borrarDatos= $connection->query("DELETE FROM places WHERE id='$id_borrar'");

                                       
                     } echo "<script>
                                        alert('Archivos eliminados exitosamente.');
                                        windows.location.href= 'editSitios.php'
                                    </script>";
                          }
                }
            ?>
            

            </form>
        </div>
    </div>
    <?php include('includes/footer.php');?>
</body>
</html>     