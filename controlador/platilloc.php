<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $platillo   = new Modelo();
        $dato       =   $platillo->mostrar("platillo","");
        require_once("../vista/platillov.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/platillon.php");
    }

    //guardar
    static function guardar(){
        $nom = $_REQUEST['nom'];
        $desc = $_REQUEST['desc'];
        $cos = $_REQUEST['cos'];
        $idTi = $_REQUEST['idTi'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nom', '$desc', '$cos', '$idTi', '$idUsrc'";
        $campos = "nombre, descripcion, costo, idTipoPlatillo, idUsuarioCrea";
        $platillo = new Modelo();
        $dato = $platillo->insertar("platillo", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/platillo.php");
    }

    //editar
    static function editar(){    
        $idplatillo = $_REQUEST['idPlatillo'];
        $platillo = new Modelo();
        $dato = $platillo->mostrar("platillo","and idPlatillo=".$idplatillo);        
        require_once("../vista/platillou.php");
    }

    //actualizar
    static function actualizar(){
        $nom = $_REQUEST['nom'];
        $desc = $_REQUEST['desc'];
        $cos = $_REQUEST['cos'];
        $idTi = $_REQUEST['idTi'];
        $idplatillo = $_REQUEST['idPlatillo'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nom', descripcion='$desc', costo='$cos', idTipoPlatillo='$idTi', idUsuarioModifica=$idUM";
        $condi = "idPlatillo=$idplatillo";
        $platillo = new Modelo();
        $dato = $platillo->actualizar("platillo",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/platillo.php");
    }

    //eliminar
    static function eliminar(){    
        $idplatillo = $_REQUEST['idPlatillo'];
        $platillo = new Modelo();
        $dato = $platillo->eliminar("platillo","idPlatillo=".$idplatillo);
        header("location: http://localhost:8080/TBD/modelo/platillo.php");
    }
}