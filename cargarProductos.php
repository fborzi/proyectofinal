<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Franco Borzi">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Venta Mayorista - Digital Sound</title>
    <link href="../proyectofinal/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../proyectofinal/assets/css/signin.css" rel="stylesheet" >
  </head>
  <body style="padding: 0%;">
    
  <main class="form-signin">
    <form action="../proyectofinal/dataBase/cargarProd.php" method="POST">
      <a href="../index.php" class="d-flex justify-content-center">
        <img class="gap-3 mb-4" src="../proyectofinal/assets/images/Digital Logo Redondo1.png" alt="home" height="72px">
      </a>
      <h1 class="h3 mb-3 fw-normal">Cargar Producto</h1>

      <div class="form-floating">
        <input type="text" name="codigo" class="form-control" id="floatingInput" placeholder="producto">
        <label for="floatingInput">Codigo de producto</label>
      </div>
      <div class="form-floating">
        <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="nombre">
        <label for="floatingInput">Nombre de producto</label>
      </div>
      <div class="form-floating">
        <input type="text" name="descripcion" class="form-control" id="floatingInput" placeholder="descripcion">
        <label for="floatingInput">Descripcion</label>
      </div>
      <div class="form-floating">
        <input type="text" name="precio" class="form-control" id="floatingInput" placeholder="precio" style="margin: 0%" >
        <label for="floatingInput">Precio</label>
      </div>
      <div class="form-floating">
        <input type="text" name="imagen" class="form-control" id="floatingInput" placeholder="imagen" style="margin: 0%" >
        <label for="floatingInput">Imagen</label>
      </div>

      <div class="container">
        <!-- <div style="width: 400px" > -->
            <div class="row pt-3 justify-content-end" style="padding: 0%">
                <!-- <div class="col-md-4"> -->
                    <button class="w-100 btn btn-sm btn-primary" type="submit" name="btnsubmit">Cargar</button>
                <!-- </div> -->
            </div>
        <!-- </div> -->
      </div>
      <?php
        if(isset($_GET["error"])){
          if($_GET["error"] == "emptyInput"){
            echo '<script>alert("Por favor, llene todos los campos")</script>';
          }
        //   else if($_GET["error"] == "emailInvalido"){
        //     echo '<script>alert("Por favor, ingrese un correo valido")</script>';
        //   }
        //   else if($_GET["error"] == "contraseñasDiferentes"){
        //     echo '<script>alert("Las contraseñas no coinciden")</script>';
        //   }
        //   else if($_GET["error"] == "emailExiste"){
        //     echo '<script>alert("El email ingresado ya existe!")</script>';
        //   }
          else if($_GET["error"] == "errorSQL"){
            echo '<script>alert("Upss.. Algo salió mal!")</script>';
          }
          else if($_GET["error"] == "none"){
            echo '<script>alert("Se registró correctamente!")</script>';
          }
        }
      ?>
    </form>
  </main>
    <script src="../proyectoFinal/assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>