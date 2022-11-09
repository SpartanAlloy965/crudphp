<?php
require_once("../models/classalummno.php");
$alumno = new alumno();
$datos = $alumno -> consultarAlumno();
print('
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="./java.js"></script>
    <title>alumno</title>
</head>

<body>
    <H1>ALUMNO</H1>
    <form action="../Alumno/controladoralumno.php" method="get">
        <input type="submit" id="btnAlumno" name="btnAlumno" value="agregar">
    </form>
    <table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
        <th>id</th>
        <th>nombre</th>
            <th>apellido</th>
            <th>correo</th>
            <th>telefono</th>
            <th>programa</th>
            <th>Borrar</th>
            <th>actualizar</th>
        </tr>
    </thead>
    ');
    while ($data = $datos ->fetch(PDO::FETCH_ASSOC)){
        print('
        <tbody>
        <tr>
            <td>'.$data["IdAlumno"].'</td>
            <td>'.$data["nombre"].'</td>
            <td>'.$data["Apellido"].'</td>
            <td>'.$data["Correo"].'</td>
            <td>'.$data["Telefono"].'</td>
            <td>'.$data["Programa"].'</td>
            <td><a href="../Alumno/controladoralumno.php?id='.$data["IdAlumno"].'&value=borra">
            <input class="btn btn-outline-danger" type="button" name="btnBorrarAlumno" value="borrar" onclick="borrar()" />
            </a></td>
            <td><a href="../Alumno/controladoralumno.php?id='.$data["IdAlumno"].'&value=Actualizar">
            <input class="btn btn-outline-danger" type="button" name="btnActualizarAlumno" value="Actualizar"/>
            </a></td>
            </tr>
        </tbody>
            ');

    }
?>
<script type="text/javascript">
    function borrar(){
        alert("alerta");
    }
    function validar (Id){
        var dato=confirm('actualizar'+Id'?');
        if(!dato){
            window.location.href='../views/viewalumno.php';
        }else{
            window.location.href='../Alumno/controladoralumno.php?Id="+Id+"&value=actualiza'
        }
    }
</script>