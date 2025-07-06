<?php
require_once 'interfaces/IRepresentanteRepository.php';

class RepresentanteRepository implements IRepresentanteRepository {
    private $conexion;

    public function __construct(PDO $conexion) {
        $this->conexion = $conexion;
    }

    public function insertar($representante) {
        $stmt = $this->conexion->prepare("INSERT INTO representantes (nombre, apellido) VALUES (?, ?)");
        $stmt->execute([$representante->nombre, $representante->apellido]);
    }
}
?>