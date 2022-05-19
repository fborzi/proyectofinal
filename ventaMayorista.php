<?php
  include_once "../proyectoFinal/dataBase/dataBaseHandler.php";
  include '../proyectoFinal/header.php';
?>

<table style="margin: 100px">
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Empresa</th>
    <th>Email</th>
    <th>Contraseña</th>
  </tr>
<?php
  $sql = "SELECT * FROM users";
  $result = $connection -> query($sql);

  if($result -> num_rows > 0){
  while($row = $result -> fetch_assoc()){
      echo "<tr><td>" . $row["usersID"] . "</td><td>" . $row["usersName"] . "</td><td>" . $row["usersLastName"] . "</td><td>" . $row["usersBusiness"] . "</td><td>" . $row["usersEmail"] . "</td><td>" . $row["usersPassword"] . "</td></tr>";
  }
  echo "</table>";
  }else{
  echo "0 results";
  }

  $connection -> close();
?>
</table>
<div>
  <h1>DESCARGAR</h1>
  <a href="" download="../proyectofinal/assets/images/Book1.xlsx">
    <img src="../proyectofinal/assets/images/Digital Logo Redondo1.png" alt="algo" style="height: 72px;">
  </a>
</div>
<?php
  include '../proyectoFinal/footer.php';
?>
