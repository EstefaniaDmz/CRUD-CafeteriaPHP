<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $asistencia   = new Modelo();
        $dato       =   $asistencia->mostrar("asistencia","");
        require_once("../vista/asistenciav.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/asistencian.php");
    }

    //guardar
    static function guardar(){
        $fecha = $_REQUEST['fecha'];
        $horaL = $_REQUEST['horaL'];
        $horaS = $_REQUEST['horaS'];
        $idTr = $_REQUEST['idTr'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$fecha', '$horaL', '$horaS', '$idTr', '$idUsrc'";
        $campos = "fecha, horaLlegada, horaSalida, idTrabajador, idUsuarioCrea";
        $asistencia = new Modelo();
        $dato = $asistencia->insertar("asistencia", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/asistencia.php");
    }

    //editar
    static function editar(){    
        $idasistencia = $_REQUEST['idAsistencia'];
        $asistencia = new Modelo();
        $dato = $asistencia->mostrar("asistencia","and idAsistencia=".$idasistencia);        
        require_once("../vista/asistenciau.php");
    }

    //actualizar
    static function actualizar(){
        $fecha = $_REQUEST['fecha'];
        $horaL = $_REQUEST['horaL'];
        $horaS = $_REQUEST['horaS'];
        $idTr = $_REQUEST['idTr'];
        $idasistencia = $_REQUEST['idAsistencia'];
        $idum = $_SESSION['idU'];
        $data = "fecha='$fecha', horaLlegada='$horaL', horaSalida='$horaS', idTrabajador='$idTr', idUsuarioModifica='$idum'";
        $condi = "idAsistencia=$idasistencia";
        $asistencia = new Modelo();
        $dato = $asistencia->actualizar("asistencia",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/asistencia.php");
    }

    //eliminar
    static function eliminar(){    
        $idasistencia = $_REQUEST['idAsistencia'];
        $asistencia = new Modelo();
        $dato = $asistencia->eliminar("asistencia","idAsistencia=".$idasistencia);
        header("location: http://localhost:8080/TBD/modelo/asistencia.php");
    }
}