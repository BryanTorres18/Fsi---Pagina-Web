<!DOCTYPE html>
<html lang= "en">

<head>
    <link rel="stylesheet" href="style.css"> <!-- Utiliza los estilos en css --> 
    <title> USUARIOS </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" type= "text/css" href="css/bootstrap.min.css"> <!-- Inicializa el bootstrap -->
    <script type = "text/javacript" src = "js/bootstrap.min.js"></script> <!-- Abre la carpeta donde se aloja el bootstrap -->
    <link rel="stylesheet" href="plugins/sweetalert2.min.css"> <!-- Inicializa el Sweet Alert 2 -->
</head>

<body>
<!-- Abre las diferentes carpetas de los plugins -->
<script src="plugins/sweetalert2.all.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="jquery/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="sweet.js"></script>

<!-- Muestra todo el encabezado con bootstrap -->
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use img ="Imagenes/logo.png"></use></svg>
      </a>
        <!-- Botones del encabezado -->
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="home_0.php" class="nav-link px-5 link-secondary">Inicio</a></li>
        <li><a href="registration.php" class="nav-link px-5 link-secondary">Registrar</a></li>
        <li><a href="users.php" class="nav-link px-5 link-secondary">Usuarios</a></li>
        <li><a href="login.html" class="nav-link px-5 link-dark">Salir</a></li>
      </ul>
        <!-- Botones sin funcionamiento -->
      <div class="col-md-3 text-end">
        <!--<button type="button" class="btn btn-outline-success me-2">Login</button>
        <button type="button" class="btn btn-success">Sign-up</button>-->
      </div>
    </header>
    <!-- Cuerpo con bootstrap -->
</div>
    <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="Imagenes/logo.png" alt="" width="222" height="227">
    <h1 class="display-5 fw-bold">Usuarios</h1>
  </div>
</div>
</body>
</html>