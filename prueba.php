
     <?php 
     
        include('Backend/db.php');

        $name = utf8_decode($_POST['name']);
       	$ubicacion = utf8_decode($_POST['location']);
       	$descripcion = utf8_decode($_POST['description']);
        $info = urlencode($_POST['info']);
        $cat = utf8_decode($_POST['cat']);
        $id = $_POST['id'];


        if (isset($_POST['actualizar']))
        {

        	mysqli_query($connection,"UPDATE places SET name = '$name', location = '$ubicacion', description = '$descripcion', 
        		info = '$info', category= '$cat' WHERE id = $id");

        	echo $id;

        	echo "<script>
                  if(confirm('Sitio actualizado correctamente')){
                      window.location.href='editSitios.php';
                  }
                  </script>";
           
        }
        
        	
    ?>