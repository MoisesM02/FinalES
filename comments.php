<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/comments.css">
    <link rel="stylesheet" href="css/alertify.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="LoginPTC/images/logoicono.png">
    

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/alertify.min.js"></script>
    <script src="js/comments.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="js/jquery.rating.pack.js"></script>
    <script>
    $(document).ready(function(){
        $('input.star').rating();
    });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<style type="text/css">
.fa{
    font-size:25px;
}
.checked{
    color:orange;
}
</style>
<body>
<?php include('Tienda/templates/cabecera2.php');

session_start();

?>
<div id="content"> </div>
<div class="container">
            <form id="ratingForm">
                <input type="hidden" id="place" name="nombre" value="<?php echo $_GET['place'];?>">
                <div class="star_content">
                    <input name="rate" value="1" type="radio" class="star"> </input> 
                    <input name="rate" value="2" type="radio" class="star"> </input>
                    <input name="rate" value="3" type="radio" class="star"> </input>
                    <input name="rate" value="4" type="radio" class="star"> </input>
                    <input name="rate" value="5" type="radio" class="star"> </input>
                </div><br><br>
                <button type="submit" name="submitRatingStar" class="btn btn-danger">Enviar Puntuación</button>
            </form><br><br>

    <br><br>
</div>
<div class="container">
 <form id="commentsForm">
 <div class="form-group">

</script>

<!-- Comenzo de comentarios -->

 <h5>Añadir comentario</h5>
 <div class="col-lg-8 col-md-10 col-sm-12 pb-2" id="commentsbox">
     <Textarea class="form-control" id="comment"></Textarea>
     <input type="submit" value="Comentar" class="btn btn-danger" id="submitComment">
 </div>
 
 <a href="" id="showAndHide" class="hide">Mostrar comentarios</a>   
 </div>
 </form>
 
    <div class="comments-container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" id="container">

            </div>
        </div>
    </div>
</div>
</div>
    <?php include('includes/footer.php');?>
<input type="hidden" id="place" value="<?php echo $_GET['place'];?>">
<input type="hidden" id="username" value="<?php echo (isset($_SESSION['usuario'])) ? $_SESSION['usuario'] : "";?>">

</body>
</html>