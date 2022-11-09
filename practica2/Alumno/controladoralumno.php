<?php
include_once("../models/classalummno.php");

if(!isset($_REQUEST["alumno"])){
    if(isset($_REQUEST["btnAlumno"])){
    $Alumno = new Alumno();


    header("location:../Alumno/addAlumno.php");

     //print($alumno-> nombre);
    
    }elseif(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="borra")){
        $id=$_REQUEST['id'];
        $alumno= new Alumno();
        $alumno->borrarAlumno($id);
    }elseif(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Actualizar")){
        header("location:../Alumno/ActualizarAlumno.php?id=".$_REQUEST['id']);
        $id=$_REQUEST['id'];
        $Alumno = new alumno();
    }elseif(isset($_REQUEST["btnActAlumno"])&& ($_REQUEST["btnNewAlumno"])){
        $idAlumno = $_REQUEST["newIdAlumno"];
        $nombre = $_REQUEST["newNameAlumno"];
        $apellido = $_REQUEST["newApellAlumno"];
        $correo = $_REQUEST["newCorreoAlumno"];
        $telefono = $_REQUEST["newTelAlumno"];
        $programa = $_REQUEST["newProgAlumno"];
        $Alumno = new alumno();
        $Alumno -> addAlumno($idAlumno,$nombre,$apellido,$correo,$telefono,$programa);
    }elseif(isset($_REQUEST["btnNewAlumno"])){
        $idAlumno = $_REQUEST["newIdAlumno"];
        $nombre = $_REQUEST["newNameAlumno"];
        $apellido = $_REQUEST["newApellAlumno"];
        $correo = $_REQUEST["newCorreoAlumno"];
        $telefono = $_REQUEST["newTelAlumno"];
        $programa = $_REQUEST["newProgAlumno"];
        $Alumno = new alumno();
        $Alumno -> addAlumno($idAlumno,$nombre,$apellido,$correo,$telefono,$programa);

    }}

    ?>

