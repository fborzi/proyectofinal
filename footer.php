<!--FOOTER-->

<div class="container">
  <div class="col">
    <footer class="footer mt-auto py-3 bg-light">
      <div class="border-bottom pb-3 mb-3">
      </div>
      <a href="index.php" class="d-flex justify-content-center">
        <img class="gap-3" src="../proyectofinal/assets/images/Digital Logo Redondo1.png" alt="home" height="60px">
      </a>
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="../proyectofinal/almacenamiento.php" class="nav-link px-2 text-muted">Productos</a></li>
        <li class="nav-item"><?php
              if (isset($_SESSION["userid"])) {
                echo '<a class="nav-link px-2 text-muted" href="../proyectofinal/ventaMayorista.php">Venta Mayorista</a>';
              } else {
                echo '<a class="nav-link px-2 text-muted" href="../proyectofinal/ventaMayoristaSignup.php">Venta Mayorista</a>';
              }
              ?>
        </li>
        <li class="nav-item"><a href="../proyectofinal/quienesSomos.php" class="nav-link px-2 text-muted">Quienes Somos</a></li>
        <li class="nav-item"><a href="../proyectofinal/contacto.php" class="nav-link px-2 text-muted">Contacto</a></li>
      </ul>
      <p class="float-end"><a href="#">Volver arriba</a></p>
      <p>&copy; 2022–2023 Digital Sound &middot; <a href="#">Privacidad</a> &middot; <a href="#">Términos</a></p>

    </footer>
    <script src="../proyectofinal/assets/js/bootstrap.bundle.min.js"></script>
  </div>
</div>
</body>

</html>