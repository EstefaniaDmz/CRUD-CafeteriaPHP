<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $platilloMaterial   = new Modelo();
        $dato       =   $platilloMaterial->mostrar("platilloMaterial","");
        require_once("../vista/platillomaterialv.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/platillomaterialn.php");
    }

    //guardar
    static function guardar(){
        $idpla = $_REQUEST['idpla'];
        $idmat = $_REQUEST['idmat'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$idpla', '$idmat', '$idUsrc'";
        $campos = "idPlatillo, idMaterial, idUsuarioCrea";
        $platilloMaterial = new Modelo();
        $dato = $platilloMaterial->insertar("platilloMaterial", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/platillomaterial.php");
    }

    //editar
    static function editar(){    
        $idplatilloMaterial = $_REQUEST['idPlatilloMaterial'];
        $platilloMaterial = new Modelo();
        $dato = $platilloMaterial->mostrar("platilloMaterial","and idPlatilloMaterial=".$idplatilloMaterial);        
        require_once("../vista/platillomaterialu.php");
    }

    //actualizar
    static function actualizar(){
        $idpla = $_REQUEST['idpla'];
        $idmat = $_REQUEST['idmat'];
        $idplatilloMaterial = $_REQUEST['idPlatilloMaterial'];
        $idUM=$_SESSION['idU'];
        $data = "idMaterial='$idmat', idPlatillo='$idpla', idUsuarioModifica=$idUM";
        $condi = "idPlatilloMaterial=$idplatilloMaterial";
        $platilloMaterial = new Modelo();
        $dato = $platilloMaterial->actualizar("platilloMaterial",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/platillomaterial.php");
    }

    //eliminar
    static function eliminar(){    
        $idplatilloMaterial = $_REQUEST['idPlatilloMaterial'];
        $platilloMaterial = new Modelo();
        $dato = $platilloMaterial->eliminar("platilloMaterial","idPlatilloMaterial=".$idplatilloMaterial);
        header("location: http://localhost:8080/TBD/modelo/platillomaterial.php");
    }
}