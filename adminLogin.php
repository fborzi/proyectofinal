<?php
    include '../proyectoFinal/header.php';
?>
<!--<div class ="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="../proyectofinal/dataBase/sentenciaSQL.php" method="POST">
            <div class="mb-3" style="margin-top: 50px;">
                <label for="exampleFormControlTextarea1" class="form-label">Sentencias SQL</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="sentenciaSQL" rows="10"></textarea>
            </div>
            <button class="btn btn-md btn-warning" style ="margin-top: 5px;" type="submit" name="submit">Enviar</button>
        </form>
    </div>
    <div class="col-md-1"></div>
</div>-->

<div class ="row">
    <div class="col-md-1"></div>
    <div class="col-md-10" style="margin-top: 50px;">
        <form class="row g-3" action="../proyectofinal/dataBase/sentenciaSQL.php" method="POST">
        <div class="col-md-2">
            <label for="inputEmail4" class="form-label">Codigo</label>
            <input type="text" name="codigo" class="form-control">
        </div>
        <div class="col-md-10">
            <label for="inputPassword4" class="form-label">Descripcion</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Rubro</label>
            <input type="text" name="rubro" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Subrubro</label>
            <input type="text" name="subrubro" class="form-control">
        </div>
        <div class="col-md-4">
            <label for="inputCity" class="form-label">Precio</label>
            <input type="text" name="precio" class="form-control">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Moneda</label>
            <select id="inputState" name="moneda" class="form-select">
            <option selected>USD</option>
            <option>Pesos</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputCity" class="form-label">Cliente</label>
            <input type="text" name="cliente" class="form-control" id="inputCity">
        </div>
        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-warning">Cargar</button>
        </div>
        </form>
    </div>
    <div class="col-md-1"></div>
    <script src="../proyectofinal/assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


