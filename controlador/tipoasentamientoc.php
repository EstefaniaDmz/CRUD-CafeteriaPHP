<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $tipoasentamiento   = new Modelo();
        $dato       =   $tipoasentamiento->mostrar("tipoasentamiento","");
        require_once("../vista/tipoasentamientov.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/tipoasentamienton.php");
    }

    //guardar
    static function guardar(){
        $nom = $_REQUEST['nom'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nom', '$idUsrc'";
        $campos = "nombre, idUsuarioCrea";
        $tipoasentamiento = new Modelo();
        $dato = $tipoasentamiento->insertar("tipoasentamiento", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/tipoasentamiento.php");
    }

    //editar
    static function editar(){    
        $idtipoasentamiento = $_REQUEST['idTipoAsentamiento'];
        $tipoasentamiento = new Modelo();
        $dato = $tipoasentamiento->mostrar("tipoasentamiento","and idTipoAsentamiento=".$idtipoasentamiento);        
        require_once("../vista/tipoasentamientou.php");
    }

    //actualizar
    static function actualizar(){
        $nom = $_REQUEST['nom'];
        $idtipoasentamiento = $_REQUEST['idTipoAsentamiento'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nom', idUsuarioModifica=$idUM";
        $condi = "idTipoAsentamiento=$idtipoasentamiento";
        $tipoasentamiento = new Modelo();
        $dato = $tipoasentamiento->actualizar("tipoasentamiento",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/tipoasentamiento.php");
    }

    //eliminar
    static function eliminar(){    
        $idtipoasentamiento = $_REQUEST['idTipoAsentamiento'];
        $tipoasentamiento = new Modelo();
        $dato = $tipoasentamiento->eliminar("tipoasentamiento","idTipoAsentamiento=".$idtipoasentamiento);
        header("location: http://localhost:8080/TBD/modelo/tipoasentamiento.php");
    }
}