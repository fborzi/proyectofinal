<?php
  session_start();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Franco Borzi">
<meta name="generator" content="Hugo 0.88.1">
<title>Digital Sound</title>


<!--Bootstrap core CSS -->
<link rel="stylesheet" href="../proyectofinal/assets/css/bootstrap.min.css">

<!-- Custom styles for this template -->
<link href="../proyectofinal/assets/css/carousel.css" rel="stylesheet">
<link href="../proyectofinal/assets/css/footers.css" rel="stylesheet">

</head>
<body class="bg-light">

<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="padding:0%" href="index.php">
      <img src="../proyectofinal/assets/images/Digital Logo Redondo1.png" alt="home" height="60px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../proyectofinal/ventaMayoristaSignup.php">Venta Mayorista</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Contacto</a>
        </li>
      </ul>
      <form class="d-flex">
        <?php
        if(isset($_SESSION["userid"])){
          echo '<a class="btn btn-outline-warning" href="../proyectoFinal/dataBase/logout.php">Cerrar Sesión</a>';
        }else{
          echo '<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">';
          echo '<button class="btn btn-outline-warning" type="submit">Buscar</button>';
        }
        ?>
      </form>
    </div>
  </div>
</nav>
</header>