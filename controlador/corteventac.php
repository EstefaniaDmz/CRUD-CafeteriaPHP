<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $corteventa   = new Modelo();
        $dato       =   $corteventa->mostrar("corteventa","");
        require_once("../vista/corteventav.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/corteventan.php");
    }

    //guardar
    static function guardar(){
        $fecha = $_REQUEST['fecha']; 
        $caja = $_REQUEST['caja'];
        $venta = $_REQUEST['ven'];
        $gasto = $_REQUEST['gas'];
        $tarjeta = $_REQUEST['tar'];
        $idT = $_REQUEST['idTra'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$fecha', '$caja', '$venta', '$gasto', '$tarjeta', '$idT', '$idUsrc'";
        $campos = "fecha, caja, venta, gasto, tarjeta, idTrabajador, idUsuarioCrea";
        $corteventa = new Modelo();
        $dato = $corteventa->insertar("corteventa", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/corteventa.php");
    }

    //editar
    static function editar(){    
        $idcorteventa = $_REQUEST['idCorteVenta'];
        $corteventa = new Modelo();
        $dato = $corteventa->mostrar("corteventa","and idCorteVenta=".$idcorteventa);        
        require_once("../vista/corteventau.php");
    }

    //actualizar
    static function actualizar(){
        $fecha = $_REQUEST['fecha']; 
        $caja = $_REQUEST['caja'];
        $venta = $_REQUEST['ven'];
        $gasto = $_REQUEST['gas'];
        $tarjeta = $_REQUEST['tar'];
        $idcorteventa = $_REQUEST['idCorteVenta'];
        $idT = $_REQUEST['idTra'];
        $idUM=$_SESSION['idU'];
        $data = "fecha='$fecha', caja='$caja', venta='$venta', gasto='$gasto', tarjeta='$tarjeta', idTrabajador='$idT', idUsuarioModifica=$idUM";
        $condi = "idCorteVenta=$idcorteventa";
        $corteventa = new Modelo();
        $dato = $corteventa->actualizar("corteventa",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/corteventa.php");
    }

    //eliminar
    static function eliminar(){    
        $idcorteventa = $_REQUEST['idCorteventa'];
        $corteventa = new Modelo();
        $dato = $corteventa->eliminar("corteventa","idCorteventa=".$idcorteventa);
        header("location: http://localhost:8080/TBD/modelo/corteventa.php");
    }
}