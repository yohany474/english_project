<?php 

 class Conexion{
    private $hostname = 'localhost';
    private $user = 'root';
    private $password = '';
    // private $bd = 'ingles_project';
    private $bd = 'diegoingles';
    private $conexion = null;

    public function __construct(){
        $this ->conexion = mysqli_connect($this ->hostname, $this  ->user,$this ->password,$this->bd);
    }

    public function GetConexion(){
        return $this->conexion;
    }

}
$conexionBD  = new Conexion();
$conexion = $conexionBD->GetConexion();
?>