<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $asentamiento   = new Modelo();
        $dato       =   $asentamiento->mostrar("asentamiento","");
        require_once("../vista/asentamientov.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/asentamienton.php");
    }

    //guardar
    static function guardar(){
        $cp= $_REQUEST['codigopostal'];
        $nom= $_REQUEST['nombre'];
        $idmun= $_REQUEST['idmuni'];
        $idz= $_REQUEST['idzona'];
        $idtipa= $_REQUEST['idtipoas'];
        $idusrc= $_SESSION['idU'];
        $id = $_REQUEST['id'];
        $data = "'$cp', '$nom', '$idmun', '$idz', '$idtipa', '$idusrc', '$id'";
        $campos = "codigoPostal, nombre, idMunicipio, idZona, idTipoAsentamiento, idUsuarioCrea, id";
        $asentamiento = new Modelo();
        $dato = $asentamiento->insertar("asentamiento", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/asentamiento.php");
    }

    //editar
    static function editar(){    
        $idasentamiento = $_REQUEST['idAsentamiento'];
        $asentamiento = new Modelo();
        $dato = $asentamiento->mostrar("asentamiento","and idAsentamiento=".$idasentamiento);        
        require_once("../vista/asentamientou.php");
    }

    //actualizar
    static function actualizar(){
        $cp= $_REQUEST['codigopostal'];
        $nom= $_REQUEST['nombre'];
        $idmun= $_REQUEST['idmuni'];
        $idz= $_REQUEST['idzona'];
        $idtipa= $_REQUEST['idtipoas'];
        $id = $_REQUEST['id'];
        $idusrc = $_SESSION['idU'];
        $idasentamiento = $_REQUEST['idAsentamiento'];
        $data = "codigoPostal='$cp', nombre='$nom', idMunicipio=$idmun, idZona=$idz, idTipoAsentamiento=$idtipa, idUsuarioModifica=$idusrc, id=$id";
        $condi = "idAsentamiento=$idasentamiento";
        $asentamiento = new Modelo();
        $dato = $asentamiento->actualizar("asentamiento",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/asentamiento.php");
    }

    //eliminar
    static function eliminar(){    
        $idasentamiento = $_REQUEST['idAsentamiento'];
        $asentamiento = new Modelo();
        $dato = $asentamiento->eliminar("asentamiento","idAsentamiento=".$idasentamiento);
        header("location: http://localhost:8080/TBD/modelo/asentamiento.php");
    }
}
