<?php
require_once("modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    static function index(){
        require_once("vista/login.php");
    }
    static function log(){
        $u = $_POST['correo'];
        $c = MD5($_POST['contra']);
        $login = new Modelo();
        $dato = $login->iniciarsesion($u, $c);
        header("Location: modelo/principal.php");
    }
}