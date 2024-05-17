<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "ejemplo 1";

$conex = new mysqli($server, $username, $password, $database);

if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}
?>