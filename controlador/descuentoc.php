<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $descuento   = new Modelo();
        $dato       =   $descuento->mostrar("descuento","");
        require_once("../vista/descuentov.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/descuenton.php");
    }

    //guardar
    static function guardar(){
        $porc = $_REQUEST['porc'];
        $nom = $_REQUEST['nom'];
        $desc = $_REQUEST['desc'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$porc', '$nom', '$desc', '$idUsrc'";
        $campos = "porcentaje, nombre, descripcion, idUsuarioCrea";
        $descuento = new Modelo();
        $dato = $descuento->insertar("descuento", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/descuento.php");
    }

    //editar
    static function editar(){    
        $iddescuento = $_REQUEST['idDescuento'];
        $descuento = new Modelo();
        $dato = $descuento->mostrar("descuento","and idDescuento=".$iddescuento);        
        require_once("../vista/descuentou.php");
    }

    //actualizar
    static function actualizar(){
        $porc = $_REQUEST['porc'];
        $nom = $_REQUEST['nom'];
        $desc = $_REQUEST['desc'];
        $iddescuento = $_REQUEST['idDescuento'];
        $idUM=$_SESSION['idU'];
        $data = "porcentaje='$porc', nombre='$nom', descripcion='$desc', idUsuarioModifica=$idUM";
        $condi = "idDescuento=$iddescuento";
        $descuento = new Modelo();
        $dato = $descuento->actualizar("descuento",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/descuento.php");
    }

    //eliminar
    static function eliminar(){    
        $iddescuento = $_REQUEST['idDescuento'];
        $descuento = new Modelo();
        $dato = $descuento->eliminar("descuento","idDescuento=".$iddescuento);
        header("location: http://localhost:8080/TBD/modelo/descuento.php");
    }
}