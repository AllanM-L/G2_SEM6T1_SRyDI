<?php
function obtenerConexion() {
    $host = "localhost";
    $db = "mi_base";
    $user = "root";
    $pass = "";
    return new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
}
?>