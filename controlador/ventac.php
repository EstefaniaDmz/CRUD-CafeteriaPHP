<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $venta   = new Modelo();
        $dato       =   $venta->mostrar("venta","");
        require_once("../vista/ventav.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/ventan.php");
    }

    //guardar
    static function guardar(){
        $ref = $_REQUEST['refer'];
        $precio = $_REQUEST['precio'];
        $fecha = $_REQUEST['fecha'];
        $idsuc = $_REQUEST['idsuc'];
        $idcli = $_REQUEST['idcli'];
        $idcor = $_REQUEST['idcor'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$ref', '$precio', '$fecha', '$idsuc', '$idcli', '$idcor', '$idUsrc'";
        $campos = "referencia, precio, fecha, idSucursal, idCliente, idCorteVenta, idUsuarioCrea";
        $venta = new Modelo();
        $dato = $venta->insertar("venta", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/venta.php");
    }

    //editar
    static function editar(){    
        $idventa = $_REQUEST['idVenta'];
        $venta = new Modelo();
        $dato = $venta->mostrar("venta","and idVenta=".$idventa);        
        require_once("../vista/ventau.php");
    }

    //actualizar
    static function actualizar(){
        $ref = $_REQUEST['refer'];
        $precio = $_REQUEST['precio'];
        $fecha = $_REQUEST['fecha'];
        $idsuc = $_REQUEST['idsuc'];
        $idcli = $_REQUEST['idcli'];
        $idcor = $_REQUEST['idcor'];
        $idventa = $_REQUEST['idVenta'];
        $idUM=$_SESSION['idU'];
        $data = "referencia='$ref', precio='$precio', fecha='$fecha', idSucursal='$idsuc', idCliente='$idcli', idCorteVenta='$idcor', idUsuarioModifica=$idUM";
        $condi = "idVenta=$idventa";
        $venta = new Modelo();
        $dato = $venta->actualizar("venta",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/venta.php");
    }

    //eliminar
    static function eliminar(){    
        $idventa = $_REQUEST['idVenta'];
        $venta = new Modelo();
        $dato = $venta->eliminar("venta","idVenta=".$idventa);
        header("location: http://localhost:8080/TBD/modelo/venta.php");
    }
}