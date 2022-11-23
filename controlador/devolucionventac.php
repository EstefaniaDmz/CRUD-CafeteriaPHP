<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $devolucionVenta   = new Modelo();
        $dato       =   $devolucionVenta->mostrar("devolucionVenta","");
        require_once("../vista/devolucionventav.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/devolucionventan.php");
    }

    //guardar
    static function guardar(){
        $art = $_REQUEST['art'];
        $raz = $_REQUEST['raz'];
        $cant = $_REQUEST['cant'];
        $costo = $_REQUEST['cost'];
        $idcom = $_REQUEST['idcom'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$art', '$raz', '$cant', '$costo', '$idcom', '$idUsrc'";
        $campos = "platillo, razon, cantidad, costo, idVenta, idUsuarioCrea";
        $devolucionVenta = new Modelo();
        $dato = $devolucionVenta->insertar("devolucionVenta", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/devolucionventa.php");
    }

    //editar
    static function editar(){    
        $iddevolucionVenta = $_REQUEST['idDevolucionVenta'];
        $devolucionVenta = new Modelo();
        $dato = $devolucionVenta->mostrar("devolucionVenta","and idDevolucionVenta=".$iddevolucionVenta);        
        require_once("../vista/devolucionventau.php");
    }

    //actualizar
    static function actualizar(){
        $art = $_REQUEST['art'];
        $raz = $_REQUEST['raz'];
        $cant = $_REQUEST['cant'];
        $costo = $_REQUEST['cost'];
        $idcom = $_REQUEST['idcom'];
        $iddevolucionVenta = $_REQUEST['idDevolucionVenta'];
        $idUM=$_SESSION['idU'];
        $data = "platillo='$art', razon='$raz', cantidad='$cant', costo='$costo', idVenta='$idcom', idUsuarioModifica=$idUM";
        $condi = "idDevolucionVenta=$iddevolucionVenta";
        $devolucionVenta = new Modelo();
        $dato = $devolucionVenta->actualizar("devolucionVenta",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/devolucionventa.php");
    }

    //eliminar
    static function eliminar(){    
        $iddevolucionVenta = $_REQUEST['idDevolucionVenta'];
        $devolucionVenta = new Modelo();
        $dato = $devolucionVenta->eliminar("devolucionVenta","idDevolucionVenta=".$iddevolucionVenta);
        header("location: http://localhost:8080/TBD/modelo/devolucionventa.php");
    }
}