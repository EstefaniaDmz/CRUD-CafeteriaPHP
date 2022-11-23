<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $vehiculo   = new Modelo();
        $dato       =   $vehiculo->mostrar("vehiculo","");
        require_once("../vista/vehiculov.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/vehiculon.php");
    }

    //guardar
    static function guardar(){
        $num = $_REQUEST['num'];
        $des = $_REQUEST['des'];
        $idTr = $_REQUEST['idTr'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$num', '$des', '$idTr', '$idUsrc'";
        $campos = "numero, descripcion, idTrabajador, idUsuarioCrea";
        $vehiculo = new Modelo();
        $dato = $vehiculo->insertar("vehiculo", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/vehiculo.php");
    }

    //editar
    static function editar(){    
        $idvehiculo = $_REQUEST['idVehiculo'];
        $vehiculo = new Modelo();
        $dato = $vehiculo->mostrar("vehiculo","and idVehiculo=".$idvehiculo);        
        require_once("../vista/vehiculou.php");
    }

    //actualizar
    static function actualizar(){
        $num = $_REQUEST['num'];
        $des = $_REQUEST['des'];
        $idTr = $_REQUEST['idTr'];
        $idvehiculo = $_REQUEST['idVehiculo'];
        $idUM=$_SESSION['idU'];
        $data = "numero='$num', descripcion='$des', idTrabajador='$idTr', idUsuarioModifica=$idUM";
        $condi = "idVehiculo=$idvehiculo";
        $vehiculo = new Modelo();
        $dato = $vehiculo->actualizar("vehiculo",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/vehiculo.php");
    }

    //eliminar
    static function eliminar(){    
        $idvehiculo = $_REQUEST['idVehiculo'];
        $vehiculo = new Modelo();
        $dato = $vehiculo->eliminar("vehiculo","idVehiculo=".$idvehiculo);
        header("location: http://localhost:8080/TBD/modelo/vehiculo.php");
    }
}