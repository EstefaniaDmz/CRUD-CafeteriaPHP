<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $trabajador   = new Modelo();
        $dato       =   $trabajador->mostrar("trabajador","");
        require_once("../vista/trabajadorv.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/trabajadorn.php");
    }

    //guardar
    static function guardar(){
        $apellidoM = $_REQUEST['apellidoM']; 
        $apellidoP=$_REQUEST['apellidoP'];
        $rfc = $_REQUEST['rfc']; 
        $correo= $_REQUEST['correo'];
        $nombre=$_REQUEST['nom'];
        $telefono= $_REQUEST['tel'];
        $idPue = $_REQUEST['idPue'];
        $idSuc = $_REQUEST['idSuc'];
        $feCon = $_REQUEST['feCon'];
        $feNac = $_REQUEST['feNac'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nombre', '$apellidoM', '$apellidoP', '$rfc', '$correo', '$telefono', '$idSuc', '$idPue', '$feCon', '$feNac', '$idUsrc'";
        $campos = "nombre, apellidoMaterno, apellidoPaterno, rfc, correo, telefono, idSucursal, idPuesto, fechaContrata, fechaNacimiento, idUsuarioCrea";
        $trabajador = new Modelo();
        $dato = $trabajador->insertar("trabajador", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/trabajador.php");
    }

    //editar
    static function editar(){    
        $idtrabajador = $_REQUEST['idTrabajador'];
        $trabajador = new Modelo();
        $dato = $trabajador->mostrar("trabajador","and idTrabajador=".$idtrabajador);        
        require_once("../vista/trabajadoru.php");
    }

    //actualizar
    static function actualizar(){
        $apellidoM = $_REQUEST['apellidoM']; 
        $apellidoP=$_REQUEST['apellidoP'];
        $rfc = $_REQUEST['rfc']; 
        $correo= $_REQUEST['correo'];
        $nombre=$_REQUEST['nom'];
        $telefono= $_REQUEST['tel'];
        $idPue = $_REQUEST['idPue'];
        $idSuc = $_REQUEST['idSuc'];
        $feCon = $_REQUEST['feCon'];
        $feNac = $_REQUEST['feNac'];
        $idtrabajador = $_REQUEST['idTrabajador'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nombre', apellidoMaterno='$apellidoM', apellidoPaterno='$apellidoP', rfc='$rfc', correo='$correo', telefono='$telefono', idSucursal='$idSuc', idPuesto='$idPue', fechaContrata='$feCon', fechaNacimiento='$feNac', idUsuarioModifica=$idUM";
        $condi = "idTrabajador=$idtrabajador";
        $trabajador = new Modelo();
        $dato = $trabajador->actualizar("trabajador",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/trabajador.php");
    }

    //eliminar
    static function eliminar(){    
        $idtrabajador = $_REQUEST['idTrabajador'];
        $trabajador = new Modelo();
        $dato = $trabajador->eliminar("trabajador","idTrabajador=".$idtrabajador);
        header("location: http://localhost:8080/TBD/modelo/trabajador.php");
    }
}