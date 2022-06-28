<?php
$servidor = "localhost";
$dataBaseUsername = "root";
$dataBasePassword = "";
$dataBaseName = "digitalsound_db";

$connection = mysqli_connect($servidor, $dataBaseUsername, $dataBasePassword, $dataBaseName);

if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}