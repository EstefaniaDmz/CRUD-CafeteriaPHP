<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $descuentoVenta   = new Modelo();
        $dato       =   $descuentoVenta->mostrar("descuentoVenta","");
        require_once("../vista/descuentoventav.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/descuentoventan.php");
    }

    //guardar
    static function guardar(){
        $idven = $_REQUEST['idven'];
        $iddes = $_REQUEST['iddes'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$idven', '$iddes', '$idUsrc'";
        $campos = "idVenta, idDescuento, idUsuarioCrea";
        $descuentoVenta = new Modelo();
        $dato = $descuentoVenta->insertar("descuentoVenta", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/descuentoventa.php");
    }

    //editar
    static function editar(){    
        $iddescuentoVenta = $_REQUEST['idDescuentoVenta'];
        $descuentoVenta = new Modelo();
        $dato = $descuentoVenta->mostrar("descuentoVenta","and idDescuentoVenta=".$iddescuentoVenta);        
        require_once("../vista/descuentoventau.php");
    }

    //actualizar
    static function actualizar(){
        $idven = $_REQUEST['idven'];
        $iddes = $_REQUEST['iddes'];
        $iddescuentoVenta = $_REQUEST['idDescuentoVenta'];
        $idUM=$_SESSION['idU'];
        $data = "idVenta='$idven', idDescuento='$iddes', idUsuarioModifica=$idUM";
        $condi = "idDescuentoVenta=$iddescuentoVenta";
        $descuentoVenta = new Modelo();
        $dato = $descuentoVenta->actualizar("descuentoVenta",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/descuentoventa.php");
    }

    //eliminar
    static function eliminar(){    
        $iddescuentoVenta = $_REQUEST['idDescuentoVenta'];
        $descuentoVenta = new Modelo();
        $dato = $descuentoVenta->eliminar("descuentoVenta","idDescuentoVenta=".$iddescuentoVenta);
        header("location: http://localhost:8080/TBD/modelo/descuentoVenta.php");
    }
}