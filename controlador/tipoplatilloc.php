<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $tipoplatillo   = new Modelo();
        $dato       =   $tipoplatillo->mostrar("tipoplatillo","");
        require_once("../vista/tipoplatillov.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/tipoplatillon.php");
    }

    //guardar
    static function guardar(){
        $nom = $_REQUEST['nom'];
        $des = $_REQUEST['des'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nom', '$des', '$idUsrc'";
        $campos = "nombre, descripcion, idUsuarioCrea";
        $tipoplatillo = new Modelo();
        $dato = $tipoplatillo->insertar("tipoplatillo", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/tipoplatillo.php");
    }

    //editar
    static function editar(){    
        $idtipoplatillo = $_REQUEST['idTipoPlatillo'];
        $tipoplatillo = new Modelo();
        $dato = $tipoplatillo->mostrar("tipoplatillo","and idTipoPlatillo=".$idtipoplatillo);        
        require_once("../vista/tipoplatillou.php");
    }

    //actualizar
    static function actualizar(){
        $nom = $_REQUEST['nom'];
        $des = $_REQUEST['des'];
        $idtipoplatillo = $_REQUEST['idTipoPlatillo'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nom', descripcion='$des', idUsuarioModifica=$idUM";
        $condi = "idTipoPlatillo=$idtipoplatillo";
        $tipoplatillo = new Modelo();
        $dato = $tipoplatillo->actualizar("tipoplatillo",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/tipoplatillo.php");
    }

    //eliminar
    static function eliminar(){    
        $idtipoplatillo = $_REQUEST['idTipoPlatillo'];
        $tipoplatillo = new Modelo();
        $dato = $tipoplatillo->eliminar("tipoplatillo","idTipoPlatillo=".$idtipoplatillo);
        header("location: http://localhost:8080/TBD/modelo/tipoplatillo.php");
    }
}