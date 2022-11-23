<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $sucursal   = new Modelo();
        $dato       =   $sucursal->mostrar("sucursal","");
        require_once("../vista/sucursalv.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/sucursaln.php");
    }

    //guardar
    static function guardar(){
        $nombre=$_REQUEST['nom'];
        $telefono= $_REQUEST['tel'];
        $calle = $_REQUEST['calle'];
        $idAse = $_REQUEST['idAse'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nombre', '$telefono', '$idAse', '$calle', '$idUsrc'";
        $campos = "nombre, telefono, idAsentamiento, calle, idUsuarioCrea";
        $sucursal = new Modelo();
        $dato = $sucursal->insertar("sucursal", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/sucursal.php");
    }

    //editar
    static function editar(){    
        $idsucursal = $_REQUEST['idSucursal'];
        $sucursal = new Modelo();
        $dato = $sucursal->mostrar("sucursal","and idSucursal=".$idsucursal);        
        require_once("../vista/sucursalu.php");
    }

    //actualizar
    static function actualizar(){
        $nombre=$_REQUEST['nom'];
        $telefono= $_REQUEST['tel'];
        $calle = $_REQUEST['calle'];
        $idAse = $_REQUEST['idAse'];
        $idsucursal = $_REQUEST['idSucursal'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nombre', telefono='$telefono', idAsentamiento='$idAse', calle='$calle', idUsuarioModifica=$idUM";
        $condi = "idSucursal=$idsucursal";
        $sucursal = new Modelo();
        $dato = $sucursal->actualizar("sucursal",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/sucursal.php");
    }

    //eliminar
    static function eliminar(){    
        $idsucursal = $_REQUEST['idSucursal'];
        $sucursal = new Modelo();
        $dato = $sucursal->eliminar("sucursal","idSucursal=".$idsucursal);
        header("location: http://localhost:8080/TBD/modelo/sucursal.php");
    }
}