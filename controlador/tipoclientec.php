<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $tipocliente   = new Modelo();
        $dato       =   $tipocliente->mostrar("tipoCliente","");
        require_once("../vista/tipoclientev.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/tipoclienten.php");
    }

    //guardar
    static function guardar(){
        $nom = $_REQUEST['nom'];
        $des = $_REQUEST['des'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nom', '$des', '$idUsrc'";
        $campos = "nombre, descripcion, idUsuarioCrea";
        $tipocliente = new Modelo();
        $dato = $tipocliente->insertar("tipocliente", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/tipocliente.php");
    }

    //editar
    static function editar(){    
        $idtipocliente = $_REQUEST['idTipoCliente'];
        $tipocliente = new Modelo();
        $dato = $tipocliente->mostrar("tipocliente","and idTipoCliente=".$idtipocliente);        
        require_once("../vista/tipoclienteu.php");
    }

    //actualizar
    static function actualizar(){
        $nom = $_REQUEST['nom'];
        $des = $_REQUEST['des'];
        $idtipocliente = $_REQUEST['idTipoCliente'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nom', descripcion='$des', idUsuarioModifica=$idUM";
        $condi = "idTipoCliente=$idtipocliente";
        $tipocliente = new Modelo();
        $dato = $tipocliente->actualizar("tipocliente",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/tipocliente.php");
    }

    //eliminar
    static function eliminar(){    
        $idtipocliente = $_REQUEST['idTipoCliente'];
        $tipocliente = new Modelo();
        $dato = $tipocliente->eliminar("tipocliente","idTipoCliente=".$idtipocliente);
        header("location: http://localhost:8080/TBD/modelo/tipocliente.php");
    }
}