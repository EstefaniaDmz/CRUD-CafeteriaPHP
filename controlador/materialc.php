<?php
require_once("../modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $material   = new Modelo();
        $dato       =   $material->mostrar("material","");
        require_once("../vista/materialv.php");
    }
    
    //nuevo
    static function nuevo(){        
        require_once("../vista/materialn.php");
    }

    //guardar
    static function guardar(){
        $nom = $_REQUEST['nom'];
        $pre = $_REQUEST['pre'];
        $des = $_REQUEST['des'];
        $cant = $_REQUEST['cant'];
        $idAl = $_REQUEST['idAl']; 
        $idCom = $_REQUEST['idCom'];
        $idUsrc = $_SESSION['idU'];
        $data = "'$nom', '$pre', '$des', '$cant', '$idAl', '$idCom', '$idUsrc'";
        $campos = "nombre, precio, descripcion, cantidad, idAlmacen, idCompra, idUsuarioCrea";
        $material = new Modelo();
        $dato = $material->insertar("material", $campos,$data);
        header("location: http://localhost:8080/TBD/modelo/material.php");
    }

    //editar
    static function editar(){    
        $idmaterial = $_REQUEST['idMaterial'];
        $material = new Modelo();
        $dato = $material->mostrar("material","and idMaterial=".$idmaterial);        
        require_once("../vista/materialu.php");
    }

    //actualizar
    static function actualizar(){
        $nom = $_REQUEST['nom'];
        $pre = $_REQUEST['pre'];
        $des = $_REQUEST['des'];
        $cant = $_REQUEST['cant'];
        $idAl = $_REQUEST['idAl']; 
        $idCom = $_REQUEST['idCom'];
        $idmaterial = $_REQUEST['idMaterial'];
        $idUM=$_SESSION['idU'];
        $data = "nombre='$nom', precio='$pre', descripcion='$des', cantidad='$cant', idAlmacen='$idAl', idCompra='$idCom', idUsuarioModifica=$idUM";
        $condi = "idMaterial=$idmaterial";
        $material = new Modelo();
        $dato = $material->actualizar("material",$data, $condi);
        header("location: http://localhost:8080/TBD/modelo/material.php");
    }

    //eliminar
    static function eliminar(){    
        $idmaterial = $_REQUEST['idMaterial'];
        $material = new Modelo();
        $dato = $material->eliminar("material","idMaterial=".$idmaterial);
        header("location: http://localhost:8080/TBD/modelo/material.php");
    }
}