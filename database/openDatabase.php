<?php

$server = "localhost";
$user = "root";
$password = "";
$nameDatabase = "favoriteseries";

try {
    //code...
    $conexion = new PDO("mysql:host=$server;dbname=$nameDatabase",$user,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      //echo "You're connected";
} catch (PDOException $e) {
    //throw $th;
    echo "there is a problem body" . $e->getMessage();
}