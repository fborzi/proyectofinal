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
        $_SESSION["userid"] = $emailExiste["usersID"];
        $_SESSION["userEmail"] = $emailExiste["usersEmail"];
        header("Location: ../ventaMayorista.php?error=none");
        exit();
    }

}


function cargarProducto($codigo, $nombre, $descripcion, $precio, $imagen){
    $sql = "INSERT INTO products (productsCode, productsName, productsDescription, productsPrice, productsImage) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../cargarProductos.php?error=errorSQL");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssss",$codigo, $nombre, $descripcion, $precio, $imagen);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../cargarProductos.php?error=none");
}

function emptyInputProductos($codigo, $nombre, $descripcion, $precio, $imagen){
    $result =true;

    if(empty($codigo) || empty($nombre) || empty($descripcion) || empty($precio) || empty($imagen)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}