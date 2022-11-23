<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $zona   = new Modelo();
        $dato       =   $zona->mostrar("zona","");
        require_once("../vista/zonav.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/zonan.php");
    }

    //guardar
    static function guardar(){
        $nom = $_REQUEST['nom'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nom', '$idUsrc'";
        $campos = "nombre, idUsuarioCrea";
        $zona = new Modelo();
        $dato = $zona->insertar("zona", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/zona.php");
    }

    //editar
    static function editar(){    
        $idzona = $_REQUEST['idZona'];
        $zona = new Modelo();
        $dato = $zona->mostrar("zona","and idZona=".$idzona);        
        require_once("../vista/zonau.php");
    }

    //actualizar
    static function actualizar(){
        $nom = $_REQUEST['nom'];
        $idzona = $_REQUEST['idZona'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nom', idUsuarioModifica=$idUM";
        $condi = "idZona=$idzona";
        $zona = new Modelo();
        $dato = $zona->actualizar("zona",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/zona.php");
    }

    //eliminar
    static function eliminar(){    
        $idzona = $_REQUEST['idZona'];
        $zona = new Modelo();
        $dato = $zona->eliminar("zona","idZona=".$idzona);
        header("location: http://localhost:8080/TBD/modelo/zona.php");
    }
}