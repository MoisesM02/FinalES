<?php 
	
	include 'Tienda/templates/cabecera2.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Recuperar Contraseña</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="LoginPTC/images/logoicono.png">
	<script src="js/traductor.js"></script>
</head>
<body>
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
</style> 
    <div>
        <center>
        	<br><br><br><br>
			<h4>
			Recuperar Contraseña
			</h4>
			<br><br>
			<p>
			Ingresa tu correo electrónico.
			</p>
			<br><br>
			<form id="recuperarForm">
				<fieldset>
				<input type="email"  class="form-control" placeholder="Email" id="email" autofocus="" />
				<br><br>
				<style type="text/css">
					#email{
						width: 95%;
						height: 62px;
						border-radius: 9px 9px 9px 9px;
					    
					}
				</style>
				<button type="submit" id="enviar" class=" btn btn-danger">
					<style type="text/css">
					#enviar{
						width: 90%;
						height: 50px;
						font-size: 11px;
					}
				</style>
				Recuperar con correo electrónico
				</button>
				<br><br>
			</div>
			</fieldset>
			<br>
			
		</form>
		<center>
		<p> Si no recuerda su correo, ingrese su nombre de usuario.</p>
		<form id="recuperarByUser">
		<fieldset>
				<input type="text"  class="form-control" placeholder="Nombre de usuario" id="username" />
				<br><br>
				<style type="text/css">
					#username{
						width: 95%;
						height: 62px;
						border-radius: 9px 9px 9px 9px;
					    
					}
				</style>
				<button type="submit" id="enviar2" class=" btn btn-danger">
					<style type="text/css">
					#enviar2{
						width: 90%;
						height: 50px;
						font-size: 11px;
					}
				</style>
				Recuperar con nombre de usuario.
				</button>
				<br><br>
				<a class="backlogin" href="login.php">
			Regresar al Login
		</a>
		<style type="text/css">
			.backlogin{
				color: #008FFF;
			}
		</style>
			</div>
			</fieldset>
			
		<br>
		<br>
		<br>
		<br>
		</center>
		</form>
		</center>
		<br><br>
		<center>
		
        </center>	
    </div>
    <script>googleTranslateElementInit()</script> 
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/enviarEmail.js"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>