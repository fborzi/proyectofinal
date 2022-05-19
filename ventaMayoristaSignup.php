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
    <form action="../proyectofinal/dataBase/singUp.php" method="POST">
      <a href="../index.php" class="d-flex justify-content-center">
        <img class="gap-3 mb-4" src="../proyectofinal/assets/images/Digital Logo Redondo1.png" alt="home" height="72px">
      </a>
      <h1 class="h3 mb-3 fw-normal">Por favor, Registrese!</h1>

      <div class="form-floating">
        <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="nombre">
        <label for="floatingInput">Nombre</label>
      </div>
      <div class="form-floating">
        <input type="text" name="apellido" class="form-control" id="floatingInput" placeholder="apellido">
        <label for="floatingInput">Apellido</label>
      </div>
      <div class="form-floating">
        <input type="text" name="empresa" class="form-control" id="floatingInput" placeholder="apellido">
        <label for="floatingInput">Empresa o Razon Social</label>
      </div>
      <div class="form-floating">
        <input style="margin: 0%" type="email" name="email" class="form-control" id="floatingInput" placeholder="email">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input style="margin: 0%" type="password" name="password" class="form-control" id="floatingInput" placeholder="password">
        <label for="floatingInput">Contraseña</label>
      </div>
      <div class="form-floating">
        <input type="password" name="repeatpassword" class="form-control" id="floatingInput" placeholder="repeat password">
        <label for="floatingInput">Repetir Contraseña</label>
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordarme
        </label>
      </div>
      <div style="width: 400px" >
        <div class="row" style="padding: 0%">
          <div class="col-md-6">
            <a class="w-100 btn btn-sm btn-outline-primary" href="../proyectofinal/ventaMayoristaLogin.php">Estoy Registrado</a>
          </div>
          <div class = "col-md-2" ></div>
          <div class="col-md-4">
            <button class="w-100 btn btn-sm btn-primary" type="submit" name="submit">Registrarse</button>
          </div>
        </div>
      </div>
      <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
      <?php
        if(isset($_GET["error"])){
          if($_GET["error"] == "emptyInput"){
            echo '<script>alert("Por favor, llene todos los campos")</script>';
          }
          else if($_GET["error"] == "emailInvalido"){
            echo '<script>alert("Por favor, ingrese un correo valido")</script>';
          }
          else if($_GET["error"] == "contraseñasDiferentes"){
            echo '<script>alert("Las contraseñas no coinciden")</script>';
          }
          else if($_GET["error"] == "emailExiste"){
            echo '<script>alert("El email ingresado ya existe!")</script>';
          }
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
    <script src="../proyectoFinal/assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>