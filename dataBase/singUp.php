<?php
if(isset($_POST["submit"])){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $empresa = $_POST["empresa"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeatpassword = $_POST["repeatpassword"];
    
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