<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $estado   = new Modelo();
        $dato       =   $estado->mostrar("estado","");
        require_once("../vista/estadov.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/estadon.php");
    }

    //guardar
    static function guardar(){
        $nom = $_REQUEST['nom'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nom', '$idUsrc'";
        $campos = "nombre, idUsuarioCrea";
        $estado = new Modelo();
        $dato = $estado->insertar("estado", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/estado.php");
    }

    //editar
    static function editar(){    
        $idestado = $_REQUEST['idEstado'];
        $estado = new Modelo();
        $dato = $estado->mostrar("estado","and idEstado=".$idestado);        
        require_once("../vista/estadou.php");
    }

    //actualizar
    static function actualizar(){
        $nom = $_REQUEST['nom'];
        $idestado = $_REQUEST['idEstado'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nom', idUsuarioModifica=$idUM";
        $condi = "idEstado=$idestado";
        $estado = new Modelo();
        $dato = $estado->actualizar("estado",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/estado.php");
    }

    //eliminar
    static function eliminar(){    
        $idestado = $_REQUEST['idEstado'];
        $estado = new Modelo();
        $dato = $estado->eliminar("estado","idEstado=".$idestado);
        header("location: http://localhost:8080/TBD/modelo/estado.php");
    }
}