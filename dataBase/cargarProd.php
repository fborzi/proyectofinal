<?php
if(isset($_POST["btnsubmit"])){
    $codigo = htmlspecialchars($_POST["codigo"]);
    $nombre = htmlspecialchars($_POST["nombre"]);
    $descripcion = htmlspecialchars($_POST["descripcion"]);
    $precio = htmlspecialchars($_POST["precio"]);
    $imagen = htmlspecialchars($_POST["imagen"]);
    
    require_once "../dataBase/dataBaseHandler.php";
    require_once "../dataBase/functions.php";

    if(emptyInputProductos($codigo, $nombre, $descripcion, $precio, $imagen) !== false){
        header("Location: ../cargarProductos.php?error=emptyInput");
        exit();
    }

    // if(invalidEmail($email) !== false){
    //     header("Location: ../ventaMayoristaSignup.php?error=emailInvalido");
    //     exit();
    // }

    // if(passwordMatch($password,$repeatpassword) !== false){
    //     header("Location: ../ventaMayoristaSignup.php?error=contraseñasDiferentes");
    //     exit();
    // }

    // if(emailExists($connection, $email) !== false){
    //     header("Location: ../ventaMayoristaSignup.php?error=emailExiste");
    //     exit();
    // }

    cargarProducto($codigo, $nombre, $descripcion, $precio, $imagen);

}else{
    header("location: ../index.php");
}