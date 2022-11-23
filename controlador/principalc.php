<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    static function index(){
        $principal = new Modelo();
        $dato = $principal->tablas();
        require_once("../vista/principalv.php");
    }
}
?>