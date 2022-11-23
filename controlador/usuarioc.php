<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $usuario   = new Modelo();
        $dato       =   $usuario->mostrar("usuario","");
        require_once("../vista/usuariov.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/usuarion.php");
    }

    //guardar
    static function guardar(){
        $apellidoM = $_REQUEST['apellidoM']; 
        $apellidoP=$_REQUEST['apellidoP'];
        $correo= $_REQUEST['correo'];
        $nombre=$_REQUEST['nom'];
        $cla= MD5($_REQUEST['pass']);
        $idUsrc = $_SESSION['idU'];
        $data = "'$nombre', '$apellidoM', '$apellidoP', '$correo', '$cla', '$idUsrc'";
        $campos = "nombre, apellidoMaterno, apellidoPaterno, correo, clave, idUsuarioCrea";
        $usuario = new Modelo();
        $dato = $usuario->insertar("usuario", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/usuario.php");
    }

    //editar
    static function editar(){    
        $idusuario = $_REQUEST['idUsuario'];
        $usuario = new Modelo();
        $dato = $usuario->mostrar("usuario","and idUsuario=".$idusuario);        
        require_once("../vista/usuariou.php");
    }

    //actualizar
    static function actualizar(){
        $apellidoM = $_REQUEST['apellidoM']; 
        $apellidoP=$_REQUEST['apellidoP'];
        $correo= $_REQUEST['correo'];
        $nombre=$_REQUEST['nom'];
        $cla= MD5($_REQUEST['pass']);
        $idusuario = $_REQUEST['idUsuario'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nombre', apellidoMaterno='$apellidoM', apellidoPaterno='$apellidoP', correo='$correo', clave='$cla', idUsuarioModifica=$idUM";
        $condi = "idUsuario=$idusuario";
        $usuario = new Modelo();
        $dato = $usuario->actualizar("usuario",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/usuario.php");
    }

    //eliminar
    static function eliminar(){    
        $idusuario = $_REQUEST['idUsuario'];
        $usuario = new Modelo();
        $dato = $usuario->eliminar("usuario","idUsuario=".$idusuario);
        header("location: http://localhost:8080/TBD/modelo/usuario.php");
    }
}