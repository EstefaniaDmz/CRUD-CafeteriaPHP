<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $devolucioncompra   = new Modelo();
        $dato       =   $devolucioncompra->mostrar("devolucionCompra","");
        require_once("../vista/devolucioncomprav.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/devolucioncompran.php");
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
        $campos = "articulo, razon, cantidad, costo, idCompra, idUsuarioCrea";
        $devolucioncompra = new Modelo();
        $dato = $devolucioncompra->insertar("devolucionCompra", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/devolucioncompra.php");
    }

    //editar
    static function editar(){    
        $iddevolucioncompra = $_REQUEST['idDevolucionCompra'];
        $devolucioncompra = new Modelo();
        $dato = $devolucioncompra->mostrar("devolucionCompra","and idDevolucionCompra=".$iddevolucioncompra);        
        require_once("../vista/devolucioncomprau.php");
    }

    //actualizar
    static function actualizar(){
        $art = $_REQUEST['art'];
        $raz = $_REQUEST['raz'];
        $cant = $_REQUEST['cant'];
        $costo = $_REQUEST['cost'];
        $idcom = $_REQUEST['idcom'];
        $iddevolucioncompra = $_REQUEST['idDevolucionCompra'];
        $idUM=$_SESSION['idU'];
        $data = "articulo='$art', razon='$raz', cantidad='$cant', costo='$costo', idCompra='$idcom', idUsuarioModifica=$idUM";
        $condi = "idDevolucionCompra=$iddevolucioncompra";
        $devolucioncompra = new Modelo();
        $dato = $devolucioncompra->actualizar("devolucionCompra",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/devolucioncompra.php");
    }

    //eliminar
    static function eliminar(){    
        $iddevolucioncompra = $_REQUEST['idDevolucionCompra'];
        $devolucioncompra = new Modelo();
        $dato = $devolucioncompra->eliminar("devolucionCompra","idDevolucionCompra=".$iddevolucioncompra);
        header("location: http://localhost:8080/TBD/modelo/devolucioncompra.php");
    }
}