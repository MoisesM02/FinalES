<link rel="stylesheet" href="css/bootstrap.min.css">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<nav class="navbar  navbar-expand-sm navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">El Salvador</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Volver</a>
      </li>
       <li class="nav-item active">
          <a class="nav-link" href="mostrarCarrito.php">Carrito(<?php  
          echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
          ?>) </a>
      </li>
    </form>
  </div>
</nav>
