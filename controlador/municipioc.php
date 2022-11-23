<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $municipio   = new Modelo();
        $dato       =   $municipio->mostrar("municipio","");
        require_once("../vista/municipiov.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/municipion.php");
    }

    //guardar
    static function guardar(){
        $nom = $_REQUEST['nom'];
        $cod = $_REQUEST['cod'];
        $idEst = $_REQUEST['idEst'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nom', '$cod', '$idEst', '$idUsrc'";
        $campos = "nombre, codigo, idEstado, idUsuarioCrea";
        $municipio = new Modelo();
        $dato = $municipio->insertar("municipio", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/municipio.php");
    }

    //editar
    static function editar(){    
        $idmunicipio = $_REQUEST['idMunicipio'];
        $municipio = new Modelo();
        $dato = $municipio->mostrar("municipio","and idMunicipio=".$idmunicipio);        
        require_once("../vista/municipiou.php");
    }

    //actualizar
    static function actualizar(){
        $nom = $_REQUEST['nom'];
        $cod = $_REQUEST['cod'];
        $idEst = $_REQUEST['idEst'];
        $idmunicipio = $_REQUEST['idMunicipio'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nom', codigo='$cod', idEstado='$idEst', idUsuarioModifica=$idUM";
        $condi = "idMunicipio=$idmunicipio";
        $municipio = new Modelo();
        $dato = $municipio->actualizar("municipio",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/municipio.php");
    }

    //eliminar
    static function eliminar(){    
        $idmunicipio = $_REQUEST['idMunicipio'];
        $municipio = new Modelo();
        $dato = $municipio->eliminar("municipio","idMunicipio=".$idmunicipio);
        header("location: http://localhost:8080/TBD/modelo/municipio.php");
    }
}