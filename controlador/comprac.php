<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $compra   = new Modelo();
        $dato       =   $compra->mostrar("compra","");
        require_once("../vista/comprav.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/compran.php");
    }

    //guardar
    static function guardar(){
        $ref = $_REQUEST['refer'];
        $precio = $_REQUEST['precio'];
        $fecha = $_REQUEST['fecha'];
        $idprov = $_REQUEST['idprov'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$ref', '$precio', '$idprov', '$idUsrc'";
        $campos = "referencia, precio, fecha, idProveedor, idUsuarioCrea";
        $compra = new Modelo();
        $dato = $compra->insertar("compra", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/compra.php");
    }

    //editar
    static function editar(){    
        $idcompra = $_REQUEST['idCompra'];
        $compra = new Modelo();
        $dato = $compra->mostrar("compra","and idCompra=".$idcompra);        
        require_once("../vista/comprau.php");
    }

    //actualizar
    static function actualizar(){
        $ref = $_REQUEST['refer'];
        $precio = $_REQUEST['precio'];
        $fecha = $_REQUEST['fecha'];
        $idprov = $_REQUEST['idprov'];
        $idcompra = $_REQUEST['idCompra'];
        $idUM= $_SESSION['idU'];
        $data = "referencia='$ref', precio='$precio', fecha='$fecha', idProveedor='$idprov', idUsuarioModifica=$idUM";
        $condi = "idCompra=$idcompra";
        $compra = new Modelo();
        $dato = $compra->actualizar("compra",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/compra.php");
    }

    //eliminar
    static function eliminar(){    
        $idcompra = $_REQUEST['idCompra'];
        $compra = new Modelo();
        $dato = $compra->eliminar("compra","idCompra=".$idcompra);
        header("location: http://localhost:8080/TBD/modelo/compra.php");
    }
}