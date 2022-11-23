<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $cliente   = new Modelo();
        $dato       =   $cliente->mostrar("cliente","");
        require_once("../vista/clientev.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/clienten.php");
    }

    //guardar
    static function guardar(){
        $apellidoM = $_REQUEST['apellidoM']; 
        $apellidoP=$_REQUEST['apellidoP'];
        $rfc = $_REQUEST['rfc']; 
        $correo= $_REQUEST['correo'];
        $nombre=$_REQUEST['nom'];
        $telefono= $_REQUEST['tel'];
        $idTiCli = $_REQUEST['idTiCli'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nombre', '$apellidoM', '$apellidoP', '$rfc', '$correo', '$telefono', '$idTiCli', '$idUsrc'";
        $campos = "nombre, apellidoMaterno, apellidoPaterno, rfc, correo, telefono, idTipoCliente, idUsuarioCrea";
        $cliente = new Modelo();
        $dato = $cliente->insertar("cliente", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/cliente.php");
    }

    //editar
    static function editar(){    
        $idcliente = $_REQUEST['idCliente'];
        $cliente = new Modelo();
        $dato = $cliente->mostrar("cliente","and idCliente=".$idcliente);        
        require_once("../vista/clienteu.php");
    }

    //actualizar
    static function actualizar(){
        $apellidoM = $_REQUEST['apellidoM']; 
        $apellidoP=$_REQUEST['apellidoP'];
        $rfc = $_REQUEST['rfc']; 
        $correo= $_REQUEST['correo'];
        $nombre=$_REQUEST['nom'];
        $telefono= $_REQUEST['tel'];
        $idTiCli = $_REQUEST['idTiCli'];
        $idcliente = $_REQUEST['idCliente'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nombre', apellidoMaterno='$apellidoM', apellidoPaterno='$apellidoP', rfc='$rfc', correo='$correo', telefono='$telefono', idTipoCliente='$idTiCli', idUsuarioModifica=$idUM";
        $condi = "idCliente=$idcliente";
        $cliente = new Modelo();
        $dato = $cliente->actualizar("cliente",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/cliente.php");
    }

    //eliminar
    static function eliminar(){    
        $idcliente = $_REQUEST['idCliente'];
        $cliente = new Modelo();
        $dato = $cliente->eliminar("cliente","idCliente=".$idcliente);
        header("location: http://localhost:8080/TBD/modelo/cliente.php");
    }
}