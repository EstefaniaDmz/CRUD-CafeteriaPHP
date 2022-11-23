<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $puesto   = new Modelo();
        $dato       =   $puesto->mostrar("puesto","");
        require_once("../vista/puestov.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/pueston.php");
    }

    //guardar
    static function guardar(){
        $nom = $_REQUEST['nom'];
        $des = $_REQUEST['des'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nom', '$des', '$idUsrc'";
        $campos = "nombre, descripcion, idUsuarioCrea";
        $puesto = new Modelo();
        $dato = $puesto->insertar("puesto", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/puesto.php");
    }

    //editar
    static function editar(){    
        $idpuesto = $_REQUEST['idPuesto'];
        $puesto = new Modelo();
        $dato = $puesto->mostrar("puesto","and idPuesto=".$idpuesto);        
        require_once("../vista/puestou.php");
    }

    //actualizar
    static function actualizar(){
        $nom = $_REQUEST['nom'];
        $des = $_REQUEST['des'];
        $idpuesto = $_REQUEST['idPuesto'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nom', descripcion='$des', idUsuarioModifica=$idUM";
        $condi = "idPuesto=$idpuesto";
        $puesto = new Modelo();
        $dato = $puesto->actualizar("puesto",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/puesto.php");
    }

    //eliminar
    static function eliminar(){    
        $idpuesto = $_REQUEST['idPuesto'];
        $puesto = new Modelo();
        $dato = $puesto->eliminar("puesto","idPuesto=".$idpuesto);
        header("location: http://localhost:8080/TBD/modelo/puesto.php");
    }
}