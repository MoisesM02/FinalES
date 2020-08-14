<?php 
	include 'Tienda/templates/cabecera2.php';

session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	try {
		$conexion = new PDO('mysql:host=localhost;dbname=test', 'root', 'Mdvlinux23');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();;
	}

	$statement = $conexion->prepare('
		SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'
	);
	$statement->execute(array(
		':usuario' => $usuario,
		':password' => $password
	));

	$resultado = $statement->fetch(PDO::FETCH_ASSOC);
	if ($resultado !== false) {
		$_SESSION['usuario'] = $_POST['usuario'];
		$_SESSION['rolid'] = $resultado['privilegio'];
		$name="username";
		$value=$resultado['rol_id'];
		$expiration = time() + 60*60*30;
		setcookie($name, $value, $expiration);
		header('Location: index.php');
	} else {
		$errores .= 'The data you entered does not match! ';
	}
}


?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<link rel="icon" type="image/png" href="LoginPTC/images/logoicono.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/traductor.js"></script>
		<title>Iniciar Sesión</title>
	</head>
    <body oncopy="return false" onpaste="return false" ondragstart="return false" ondrop="return false">
    <link rel="icon" type="image/png" href="LoginPTC/images/logoicono.png">
    <img src="LoginPTC/images/logo.jpg" class="rounded float-left" alt="Logo TRIPS SV" style="width: 850px">
	<style type="text/css">
		img{
			max-width: 100%;
		}
	</style>	
	<style type="text/css">
  body{
    top: 0  !important;
    }
    .goog-te-banner-frame{
      display: none;
        }
		#form{
			max-width:100vw;
		}
</style> 


	<div id="form">
		<center>
			<br><br><br><br>
		<h4> Inicia Sesión:</h4> 
		<br><br><br>
				
		<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" >
		<fieldset>
			<center>
						
		    <input type="text" class="form-control inputs" id="" name="usuario" placeholder="Usuario" autofocus="" required minlength="4" maxlength="24"/>
		    <br><br><br>
		    <style type="text/css">
				.inputs{
					max-width: 90%;
					max-height: 90%;
					border-radius: 9px 9px 9px 9px;
				}
				#ingresar{
					max-width: 90%;
					max-height: 90%;
				}
			</style>	
														
			<input type="password" name="password" class="form-control inputs" id="" placeholder="Contraseña" required="" minlength="8" maxlength="35" />
			<br>		
				
			<br><br>																		
			<button type="submit" id="ingresar" class="width-35 pull-right btn btn-sm btn-danger" name="aceptar">
			<style type="text/css">
				#ingresar{
					width: 450px;
					height: 60px;
					font-size: 13px;
				}
			</style>	
		    Ingresar
			</button>
			<br>
			</center>
						
			</fieldset>
			</form>
			<center>
			<br><br>			
			<center>
			<a href="recuperarcontraseña.php" class="float-left">Olvidé mi contraseña</a>
			</center>
			<style type="text/css">
				.float-left{
					color: #008FFF;
				}
			
			</style>
		
		    	<br>
		<br>
		<br>
		<br>
		    <style type="text/css">
				.float-right{
					color: #008FFF;
				}
				</style>
		<br>
		<br>
		<br>
		<br>
			
	     </center>
		</div>	
		<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<script>googleTranslateElementInit()</script> 
	</body>
</html>
