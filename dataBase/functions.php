<?php

function emptyInputSignup($nombre, $apellido, $empresa, $email, $password, $repeatpassword){
    $result =true;

    if(empty($nombre) || empty($apellido) || empty($empresa) || empty($email) || empty($password) || empty($repeatpassword)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function emptyInputLogin($email, $password){
    $result =true;

    if(empty($email) || empty($password)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result = true;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $repeatpassword){
    $result = true;

    if($password !== $repeatpassword){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function emailExists($connection, $email){

    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../ventaMayoristaSignup.php?error=errorSQL");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function crearUsuario($connection, $nombre, $apellido, $empresa, $email, $password){
    $sql = "INSERT INTO users (usersName, usersLastName, usersBusiness, usersEmail, usersPassword) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../ventaMayoristaSignup.php?error=errorSQL");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); //deberia colocar hashedpassword en el $password del paramentro.

    mysqli_stmt_bind_param($stmt, "sssss",$nombre, $apellido, $empresa, $email, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../ventaMayorista.php?error=none");
}

function logearUsuario($connection,$email,$password){
    $emailExiste = emailExists($connection, $email);

    if($emailExiste === false){
        header("Location: ../ventaMayoristaLogin.php?error=emailNoExiste");
        exit();
    }

    //Esta variable es igual a la que esta en la base de datos si estuviera hasheada.
    //$hashedPassword = $emailExiste["usersPassword"];
    //$checkPassword = password_verify($password, $hashedPassword);

    if($emailExiste["usersPassword"] !== $password){
        header("Location: ../ventaMayoristaLogin.php?error=contraseñaIncorrecta");
        exit();
    }else if($emailExiste["usersPassword"] === $password){
        session_start();
        if($emailExiste["usersID"] === 1){
            $_SESSION["userid"] = $emailExiste["usersID"];
            $_SESSION["userEmail"] = $emailExiste["usersEmail"];
            header("Location: ../adminLogin.php?error=none");
            exit();
        }else{
            $_SESSION["userid"] = $emailExiste["usersID"];
            $_SESSION["userEmail"] = $emailExiste["usersEmail"];
            header("Location: ../ventaMayorista.php?error=none");
            exit();
        }
        
    }

}

function crearSentencia($connection, $codigo, $nombre, $rubro, $subrubro, $precio, $moneda, $cliente){
    $sql = "INSERT INTO productos (producto_codigo, producto_nombre, producto_rubro, producto_subrubro, producto_precio, producto_moneda, usersID) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../index.php?error=errorSQL");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssss",$codigo, $nombre, $rubro, $subrubro, $precio, $moneda, $cliente);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../adminLogin.php?error=none");
}