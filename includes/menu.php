<nav class="navbar  navbar-expand-sm navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">El Salvador</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Categorías</a>
      </li>
 
      <?php session_start(); if(isset($_SESSION['usuario'])){
  echo "
  <li class='nav-item'>
        <a class='nav-link' href='cerrarSesion.php'>Cerrar Sesión</a>
      </li>
  ";
  if(isset($_SESSION['rolid']) && $_SESSION['rolid'] == 1){
    echo"
    <li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      Gestionar
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\"  href=\"addSites.php\">Añadir Sitios</a>
          <a class=\"dropdown-item\" href=\"PAQUETEes/PAQUETEes/paquete.html\">Crear Paquetes</a>
          <a class=\"dropdown-item\" href=\"editSitios.php\">Modificar Sitios</a>
          <a class=\"dropdown-item\" href=\"editCats.html\">Crear Categorías</a>
          
   </div>
    </li>
    ";
  }else{
    echo "";
  }
}else{
  echo"
  <li class=\"nav-item dropdown\">
  <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Cuenta
  </a>
  <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\"  href=\"Login/login.php\">Iniciar Sesión</a>
          <a class=\"dropdown-item\" href=\"Login/registrate.php\">Registrarse</a>
      </div>
      </li>
  ";
} ?>
      <li class="nav-item">
        <a class="nav-link" href="home.php">Paquetes</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="ajustes.php">Ajustes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../PTCen">Inglés</a>
      </li>
    <form action="montañismo.php" class="form-inline my-2 my-lg-0">
    <input type="hidden" name="submited" value="1">
      <input class="form-control mr-sm-2" name="txtBuscar" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>
  </div>
</nav>