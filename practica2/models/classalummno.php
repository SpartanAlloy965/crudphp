<?php

class alumno{
    public $IdAlumno;
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $programa;
    
public function consultarAlumno(){
    require_once("../dao/conectar.php");
    $conn = connect();
    $sql = "select * from alumno";
    $consulta = $conn -> prepare($sql);
    $consulta -> execute();
    return $consulta;
    $conn = null;

}

    public function borrarAlumno ($IdAlumno){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from alumno where IdAlumno=?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($IdAlumno)));
        $conn = null;
        print ("El alumno $IdAlumno ha sido borrado");
        print ("<br> <a href='../views/viewalumno.php'> regresar.... </a>");
    
    }

    public function ActualizarAlumno ($idAlumno, $nombre, $apellido, $correo){
        require_once("../dao/conectar.php");
        $conn-> connect();
        $sql="UPDATE almumno SET nombre=?,Apellido=?,Correo=?,Programa=?WHERE IdAlumno=?";
        $consulta=$conn ->prepare(sql);
        $consulta -> execute((Array($IdAlumno)));
        $conn = null;
        print ("El alumno $idAlumno , $nombre , $apellido con correo $correo ha sido actualizado");
        print ("<br> <a href='../views/viewalumno.php'> Regresar........... </a>");
    
    }

    public function AddAlumno($idAlumno,$nombre,$apellido,$correo,$telefono,$programa){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into alumno(idAlumno,nombre,apellido,correo,telefono,programa)values(?,?,?,?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($idAlumno, $nombre, $apellido, $correo, $telefono, $programa)));
        $conn = null;
       header("location:../views/viewalumno.php");
    }

}


?>
