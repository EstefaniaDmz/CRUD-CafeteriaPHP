<?php
session_start();
class Modelo{
    private $Modelo;
    private $db;    
    private $datos;    
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=cafeteria',"root","");
    }
    
    public function insertar($tabla, $campos, $data){
        $consulta="insert into ".$tabla."(".$campos.") values(". $data .");";
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
     }

     public function mostrar($tabla,$condicion){
        $consul="select * from ".$tabla." where estatus=1 ".$condicion.";";
        $resu=$this->db->query($consul);        
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
        }
        return $this->datos;
    } 

    public function actualizar($tabla, $data, $condicion){       
        $consulta="update ".$tabla." set ".$data." where ".$condicion.";";
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }
    public function eliminar($tabla, $condicion){
        $eli="update ".$tabla." set estatus=0, idUsuarioModifica=".$_SESSION['idU']." where ".$condicion.";";
        $res=$this->db->query($eli);
        if ($res) {
            return true; 
        }else {
            return false;
        }
    }

    public function tablas(){
        $consulta="show tables;";
        $resu=$this->db->query($consulta);
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)){
            $this->datos[]=$filas;
        }
        return $this->datos;
    }
    
   public function iniciarsesion($email, $pass){
       
       $query = $this->db->prepare("SELECT * FROM Usuario WHERE correo=:correo AND clave=:clave");
       $query->bindParam("correo", $email, PDO::PARAM_STR);
       $query->bindParam("clave", $pass, PDO::PARAM_STR);
       $query->execute();
    
       $result = $query->fetch(PDO::FETCH_ASSOC);
    
       if (!$result) {
           echo '<p class="error">Favor de no ser pendejo</p>';
       } else {
           $_SESSION['idU'] = $result['idUsuario'];
       }
   }
}