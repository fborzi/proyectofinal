<?php
if(isset($_POST["submit"])){
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    require_once "../dataBase/dataBaseHandler.php";
    require_once "../dataBase/functions.php";

    if(emptyInputLogin($email, $password) !== false){
        header("Location: ../ventaMayoristaLogin.php?error=emptyInput");
        exit();
    }

    logearUsuario($connection, $email, $password);

}else{
    header("location: ../ventaMayoristaLogin.php");
    exit();
}