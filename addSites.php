<?php
       include 'Tienda/templates/cabecera6.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styleAddPl.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="LoginPTC/images/logoicono.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir sitios</title>
</head>
<body>
    <div id="alert"></div>
    <form id="addPlaces" class="form-group">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="form-group p-3">
                     <p><label for="nombre"> <h4>Nombre del lugar</h4></label></p>
                     <input type="text" name="name" id="nombre" placeholder="Nombre" class="form-control txt"  required onpaste="return false">
                 </div>
                 <div class="row pl-3">
                     <div class="col-lg-4 col-sm-4 col-md-3">
                         <div class="form-group pt-3">
                             <label for="category"><h4>Categoría</h4></label>
                        </div>
                     </div>
                     <div class="col-lg-7 col-sm-6 col-md-7">
                         <div class="form-group">
                            <select id="category" name="category" class="form-control"> </select>
                         </div>
                     </div>
                 </div>   
                 <div class="form-group p-3">
                    <p><label for="depart"><h4>Departamento</h4></label></p>
                    <input type="text" name="location" id="location" class="form-control txt">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-ms-8">
            <div class="form-group p-3">
                        <p><label for="description"><h4>Descripción del sitio.</h4></label></p>
                        <textarea name="description" id="description" placeholder="Describe brevemente la información del sitio" class="form-control" cols="40">
                        
                        </textarea>
            </div>
            <div class="form-group p-3">
                        <input type="file" name="image" id="image" class="form-control-file pt-2">
                    </div>
            </div>
        </div>
        <div class="form-group p-3">
                        <p><label for="description"><h4>Información del sitio.</h4></label></p>
                        <textarea name="informacion" id="informacion" class="ckeditor" placeholder="Describe brevemente el sitio turístico" class="form-control" cols="30" rows="10">
                        </textarea>
            </div>

        <button type="submit" class="btn btn-danger p-3" name="enviar" id="addEvent" style="pading-right:2%; width:15%; margin-left:82%; margin-bottom: 20px;">Añadir sitio</button>
        <style type="text/css">
  body{
    top: 0  !important;
    }
    .goog-te-banner-frame{
      display: none;
        }
</style> 

    </form>
    <?php include('includes/footer.php') ?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/places.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>
    <script>googleTranslateElementInit()</script> 
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="js/traductor.js"></script>
    <!-- <script>
        CKEDITOR.replace('informacion');
    </script> -->
</body>
</html>