<?php

class Novedades{
    public $idNovedades;
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $programa;
    
    public function borrarNovedades ($idNovedades){
        print ("Las Novedades $idNovedades ha sido borrado");
        print ("<br> <a href='../views/viewNovedades.php'> regresar.... </a>");
    
    }

    public function ActualizarNovedades ($idNovedades, $nombre, $apellido, $correo){
        print ("las Novedades $idNovedades , $nombre , $apellido con correo $correo ha sido actualizado");
        print ("<br> <a href='../views/viewNovedades.php'> Regresar........... </a>");
    
    }

    public function AddNovedades($idNovedades,$nombre,$apellido,$correo,$telefono,$programa){
        print("Las Novedades $idNovedades $nombre $apellido  $correo $telefono $programa   ha sido agregado");
        print ("<br> <a href='../views/viewNovedades.php'> Regresar. </a>");
    }

}


?>
