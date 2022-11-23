<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $almacen   = new Modelo();
        $dato       =   $almacen->mostrar("almacen","");
        require_once("../vista/almacenv.php");
    }

    //nuevo
    static function nuevo(){        
        require_once("../vista/almacenn.php");
    }

    //guardar
    static function guardar(){
        $numero= $_REQUEST['num'];
        $capacidad= $_REQUEST['cap'];
        $idUsuarioCrea = $_SESSION['idU'];
        $data = "'$numero', $capacidad, $idUsuarioCrea";
        $campos = "numero, capacidad, idUsuarioCrea";
        $almacen = new Modelo();
        $dato = $almacen->insertar("almacen", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/almacen.php");
    }

    //editar
    static function editar(){    
        $idAlmacen = $_REQUEST['idAlmacen'];
        $almacen = new Modelo();
        $dato = $almacen->mostrar("almacen","and idAlmacen=".$idAlmacen);        
        require_once("../vista/almacenu.php");
    }

    //actualizar
    static function actualizar(){
        $idAlmacen = $_REQUEST['idAlmacen'];
        $numero= $_REQUEST['num'];
        $capacidad= $_REQUEST['cap'];
        $idusuariom = $_SESSION['idU'];

        $data = "numero='$numero', capacidad=$capacidad, idUsuarioModifica=$idusuariom";
        $condi = "idAlmacen=$idAlmacen";
        $almacen = new Modelo();
        $dato = $almacen->actualizar("almacen",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/almacen.php");
    }

    //eliminar
    static function eliminar(){    
        $idAlmacen = $_REQUEST['idAlmacen'];
        $almacen = new Modelo();
        $dato = $almacen->eliminar("almacen","idAlmacen=".$idAlmacen);
        header("location: http://localhost:8080/TBD/modelo/almacen.php");
    }
}