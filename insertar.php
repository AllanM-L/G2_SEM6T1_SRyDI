<?php
require_once 'modelos/Representante.php';
require_once 'interfaces/IRepresentanteRepository.php';
require_once 'repositorios/RepresentanteRepository.php';
require_once 'controladores/RepresentanteController.php';
require_once 'conexion.php';

$conexion = obtenerConexion();
$repositorio = new RepresentanteRepository($conexion);
$controlador = new RepresentanteController($repositorio);

$nombre = $_POST['nombre'] ?? '';
$apellido = $_POST['apellido'] ?? '';

if (!empty($nombre) && !empty($apellido)) {
    $controlador->guardar($nombre, $apellido);
    echo "Representante guardado con éxito.";
} else {
    echo "Faltan datos.";
}
?>