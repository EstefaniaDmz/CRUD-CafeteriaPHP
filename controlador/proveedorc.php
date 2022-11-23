<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $proveedor   = new Modelo();
        $dato       =   $proveedor->mostrar("proveedor","");
        require_once("../vista/proveedorv.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/proveedorn.php");
    }

    //guardar
    static function guardar(){
        $apellidoM = $_REQUEST['apellidoM']; 
        $apellidoP=$_REQUEST['apellidoP'];
        $rfc = $_REQUEST['rfc']; 
        $correo= $_REQUEST['correo'];
        $nombre=$_REQUEST['nom'];
        $telefono= $_REQUEST['tel'];
        $idTiP = $_REQUEST['idTiP'];
        $idAse = $_REQUEST['idAse'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nombre', '$apellidoM', '$apellidoP', '$rfc', '$correo', '$telefono', '$idAse', '$idTiP', '$idUsrc'";
        $campos = "nombre, apellidoMaterno, apellidoPaterno, rfc, correo, telefono, idAsentamiento, idTipoProveedor, idUsuarioCrea";
        $proveedor = new Modelo();
        $dato = $proveedor->insertar("proveedor", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/proveedor.php");
    }

    //editar
    static function editar(){    
        $idproveedor = $_REQUEST['idProveedor'];
        $proveedor = new Modelo();
        $dato = $proveedor->mostrar("proveedor","and idProveedor=".$idproveedor);        
        require_once("../vista/proveedoru.php");
    }

    //actualizar
    static function actualizar(){
        $apellidoM = $_REQUEST['apellidoM']; 
        $apellidoP=$_REQUEST['apellidoP'];
        $rfc = $_REQUEST['rfc']; 
        $correo= $_REQUEST['correo'];
        $nombre=$_REQUEST['nom'];
        $telefono= $_REQUEST['tel'];
        $idTiP = $_REQUEST['idTiP'];
        $idAse = $_REQUEST['idAse'];
        $idproveedor = $_REQUEST['idProveedor'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nombre', apellidoMaterno='$apellidoM', apellidoPaterno='$apellidoP', rfc='$rfc', correo='$correo', telefono='$telefono', idAsentamiento='$idAse', idTipoProveedor='$idTiP', idUsuarioModifica=$idUM";
        $condi = "idProveedor=$idproveedor";
        $proveedor = new Modelo();
        $dato = $proveedor->actualizar("proveedor",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/proveedor.php");
    }

    //eliminar
    static function eliminar(){    
        $idproveedor = $_REQUEST['idProveedor'];
        $proveedor = new Modelo();
        $dato = $proveedor->eliminar("proveedor","idProveedor=".$idproveedor);
        header("location: http://localhost:8080/TBD/modelo/proveedor.php");
    }
}