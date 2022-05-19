<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Franco Borzi">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Venta Mayorista - Digital Sound</title>
    
   
    <!--Bootstrap core CSS -->
    <link rel="stylesheet" href="../proyectofinal/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../proyectofinal/assets/css/signin.css">
  </head>
  <body style="padding: 0%;">
    
  <main class="form-signin">
    <form action="../proyectofinal/dataBase/login.php" method="POST">
        <a href="../proyectofinal/index.php" class="d-flex justify-content-center">
            <img class="gap-3 mb-4" src="../proyectofinal/assets/images/Digital Logo Redondo1.png" alt="home" height="72px">
        </a>
        <h1 class="h3 mb-3 fw-normal">Por favor, Inicie sesión!</h1>
        <div class="form-floating">
            <input type="email" name="email"class="form-control" id="floatingInput" placeholder="email">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingInput" placeholder="password">
            <label for="floatingInput">Contraseña</label>
        </div>
  
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Recordarme
            </label>
        </div>
        <div style="width: 400px" >
            <div class="row" style="padding: 0%">
                <div class="col-md-6">
                    <a class="w-100 btn btn-sm btn-outline-primary" href="../proyectofinal/ventaMayoristaSignup.php">No estoy registrado</a>
                </div>
                <div class = "col-md-2" ></div>
                <div class="col-md-4">
                    <button class="w-100 btn btn-sm btn-primary" type="submit" name="submit">Iniciar</button>
                </div>
            </div>
        </div>
        <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
        <?php
          if(isset($_GET["error"])){
            if($_GET["error"] == "emptyInput"){
              echo '<script>alert("Por favor, llene todos los campos")</script>';
            }
            else if($_GET["error"] == "emailNoExiste"){
              echo '<script>alert("El email no existe, por favor registrese")</script>';
            }
            else if($_GET["error"] == "contraseñaIncorrecta"){
              echo '<script>alert("Contraseña incorrecta")</script>';
            }
            else if($_GET["error"] == "none"){
              echo '<script>alert("Inició sesión correctamente!")</script>';
            }
          }
        ?>
    </form>
  </main>
  <script src="../proyectoFinal/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>