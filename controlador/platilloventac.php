<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $platilloVenta   = new Modelo();
        $dato       =   $platilloVenta->mostrar("platilloVenta","");
        require_once("../vista/platilloventav.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/platilloventan.php");
    }

    //guardar
    static function guardar(){
        $idpla = $_REQUEST['idpla'];
        $idven = $_REQUEST['idven'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$idpla', '$idven', '$idUsrc'";
        $campos = "idPlatillo, idVenta, idUsuarioCrea";
        $platilloVenta = new Modelo();
        $dato = $platilloVenta->insertar("platilloVenta", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/platilloventa.php");
    }

    //editar
    static function editar(){    
        $idplatilloVenta = $_REQUEST['idPlatilloVenta'];
        $platilloVenta = new Modelo();
        $dato = $platilloVenta->mostrar("platilloVenta","and idPlatilloVenta=".$idplatilloVenta);        
        require_once("../vista/platilloventau.php");
    }

    //actualizar
    static function actualizar(){
        $idpla = $_REQUEST['idpla'];
        $idven = $_REQUEST['idven'];
        $idplatilloVenta = $_REQUEST['idPlatilloVenta'];
        $idUM=$_SESSION['idU'];
        $data = "idVenta='$idven', idPlatillo='$idpla', idUsuarioModifica=$idUM";
        $condi = "idPlatilloVenta=$idplatilloVenta";
        $platilloVenta = new Modelo();
        $dato = $platilloVenta->actualizar("platilloVenta",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/platilloventa.php");
    }

    //eliminar
    static function eliminar(){    
        $idplatilloVenta = $_REQUEST['idPlatilloVenta'];
        $platilloVenta = new Modelo();
        $dato = $platilloVenta->eliminar("platilloVenta","idPlatilloVenta=".$idplatilloVenta);
        header("location: http://localhost:8080/TBD/modelo/platilloventa.php");
    }
}