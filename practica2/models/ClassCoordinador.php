<?php

class Coordinador{
    public $IdCoordinador;
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $Sede;

    public function borrarCoordinador ($IdCoordinador){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from alumno where IdCoordinador=?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($IdCoordinador)));
        $conn = null;
        print ("El alumno $Idcoordinador ha sido borrado");
        print ("<br> <a href='../views/viewCoordinador.php'> regresar.... </a>");
    
    }

    public function ActualizarCoordinador ($idCoordinador, $nombre, $apellido, $correo){
        print ("El Coordinador $idCoordinador , $nombre , $apellido con correo $correo ha sido actualizado");
        print ("<br> <a href='../views/viewCoordinador.php'> Regresar........... </a>");
    
    }

    public function AddCoordinador($idCoordinador,$nombre,$apellido,$correo,$telefono,$Sede){
        print("El Coordinador $idCoordinador $nombre $apellido  $correo $telefono $Sede   ha sido agregado");
        print ("<br> <a href='../views/viewCoordinador.php'> Regresar. </a>");
    }

}


?>
