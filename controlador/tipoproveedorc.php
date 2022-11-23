<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $tipoproveedor   = new Modelo();
        $dato       =   $tipoproveedor->mostrar("tipoproveedor","");
        require_once("../vista/tipoproveedorv.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/tipoproveedorn.php");
    }

    //guardar
    static function guardar(){
        $nom = $_REQUEST['nom'];
        $des = $_REQUEST['des'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nom', '$des', '$idUsrc'";
        $campos = "nombre, descripcion, idUsuarioCrea";
        $tipoproveedor = new Modelo();
        $dato = $tipoproveedor->insertar("tipoproveedor", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/tipoproveedor.php");
    }

    //editar
    static function editar(){    
        $idtipoproveedor = $_REQUEST['idTipoProveedor'];
        $tipoproveedor = new Modelo();
        $dato = $tipoproveedor->mostrar("tipoproveedor","and idTipoProveedor=".$idtipoproveedor);        
        require_once("../vista/tipoproveedoru.php");
    }

    //actualizar
    static function actualizar(){
        $nom = $_REQUEST['nom'];
        $des = $_REQUEST['des'];
        $idtipoproveedor = $_REQUEST['idTipoProveedor'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nom', descripcion='$des', idUsuarioModifica=$idUM";
        $condi = "idTipoProveedor=$idtipoproveedor";
        $tipoproveedor = new Modelo();
        $dato = $tipoproveedor->actualizar("tipoproveedor",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/tipoproveedor.php");
    }

    //eliminar
    static function eliminar(){    
        $idtipoproveedor = $_REQUEST['idTipoProveedor'];
        $tipoproveedor = new Modelo();
        $dato = $tipoproveedor->eliminar("tipoproveedor","idTipoProveedor=".$idtipoproveedor);
        header("location: http://localhost:8080/TBD/modelo/tipoproveedor.php");
    }
}