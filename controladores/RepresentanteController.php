<?php
class RepresentanteController {
    private $repositorio;

    public function __construct(IRepresentanteRepository $repositorio) //inyeccion de dependencia
    {
        $this->repositorio = $repositorio;
    }

    public function guardar($nombre, $apellido) {
        $representante = new Representante($nombre, $apellido);
        $this->repositorio->insertar($representante);
    }
}
?>