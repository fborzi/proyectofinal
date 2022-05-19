<?php
if(isset($_POST["submit"])){
    
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $rubro = $_POST["rubro"];
    $subrubro = $_POST["subrubro"];
    $precio = $_POST["precio"];
    $moneda = $_POST["moneda"];
    $cliente = $_POST["cliente"];

    require_once "../proyectoFinal/dataBase/dataBaseHandler.php";
    require_once "../proyectoFinal/dataBase/functions.php";

    crearSentencia($connection, $codigo, $nombre, $rubro, $subrubro, $precio, $moneda, $cliente);
}else{
    header("location: ../index.php");
}
