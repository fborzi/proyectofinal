<?php
if(isset($_POST["submit"])){
    $nombre = htmlspecialchars($_POST["nombre"]);
    $apellido = htmlspecialchars($_POST["apellido"]);
    $empresa = htmlspecialchars($_POST["empresa"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $repeatpassword = htmlspecialchars($_POST["repeatpassword"]);
    
    require_once "../dataBase/dataBaseHandler.php";
    require_once "../dataBase/functions.php";

    if(emptyInputSignup($nombre, $apellido, $empresa, $email, $password, $repeatpassword) !== false){
        header("Location: ../ventaMayoristaSignup.php?error=emptyInput");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("Location: ../ventaMayoristaSignup.php?error=emailInvalido");
        exit();
    }

    if(passwordMatch($password,$repeatpassword) !== false){
        header("Location: ../ventaMayoristaSignup.php?error=contraseñasDiferentes");
        exit();
    }

    if(emailExists($connection, $email) !== false){
        header("Location: ../ventaMayoristaSignup.php?error=emailExiste");
        exit();
    }

    crearUsuario($connection, $nombre, $apellido, $empresa, $email, $password);

}else{
    header("location: ../index.php");
}