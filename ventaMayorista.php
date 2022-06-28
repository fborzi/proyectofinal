<?php
include_once "../proyectoFinal/dataBase/dataBaseHandler.php";
include '../proyectoFinal/header.php';
?>

<link href="../proyectofinal/assets/css/images.css" rel="stylesheet">

<!--<table style="margin: 100px">
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Empresa</th>
    <th>Email</th>
    <th>Contraseña</th>
  </tr>-->
  <?php
  /*
  $sql = "SELECT * FROM users";
  $result = $connection->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["usersID"] . "</td><td>" . $row["usersName"] . "</td><td>" . $row["usersLastName"] . "</td><td>" . $row["usersBusiness"] . "</td><td>" . $row["usersEmail"] . "</td><td>" . $row["usersPassword"] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

  $connection->close();
  */?>
</table>
<span class="align-middle">middle
<div class="container" style="margin-top: 180px; margin-bottom: 180px">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h2 style = "text-align: center" >DESCARGAR LA LISTA ACTUALIZADA</h2>
      <a href="" download="../proyectofinal/assets/images/Book1.xlsx">
        <img src="../proyectofinal/assets/images/excel-logo.png" alt="descarga" style="height: 72px;" class="center">
      </a>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
</span>
</div>
<?php
include '../proyectoFinal/footer.php';
?>