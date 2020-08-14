<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="https://drive.google.com/open?id=1HzBJzHhBEac8Vxx_KiCSk3RJl5TtmNiD" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/testis.css">
    <link rel="icon" type="image/png" href="LoginPTC/images/logoicono.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SV Trips</title>
</head>
<body> 
<?php include('Tienda/templates/cabecera5.php') ?>
    <input type="hidden" id="category" value="<?php echo $_GET['cat']; ?>">
    <div class="container py-3">
        <div class="row" id="places">
          

        </div>
<!-- Row -->    
    </div>
<!--Container -->

<?php include('includes/footer.php') ?>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/fetchPlaces.js"></script>
<script>googleTranslateElementInit()</script> 
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
