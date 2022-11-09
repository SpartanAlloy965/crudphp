<?php
require_once("../models/ClassCoordinador.php");
$Coordinador = new Coordinador();
$datoss = $Coordinador -> borrarCoordinador();
print('<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="./java.js"></script>
    <title>COORDINADOR</title>
</head>

<body>
    <h1>COORDINADOR</h1>
    <table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>

         <th> Crear   <input type="button" value="Crear"> </th>
        <th> Buscar  <input type="search" name="Buscar" id="" placeholder="Buscar"> </th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Editar</th>
            <th>Borrar</th>

        </tr>
    </thead>
    ');
        while ($datas = $datoss ->fetch(PDO::FETCH_ASSOC)){
            print('
            <tbody>
            <tr>
                <td>'.$datas["IdAlumno"].'</td>
                <td>'.$datas["nombre"].'</td>
                <td>'.$datas["Apellido"].'</td>
                <td>'.$datas["Correo"].'</td>
                <td>'.$datas["Telefono"].'</td>
                <td>'.$datas["Programa"].'</td>
                <td><a href="../controllers/ControladorCoordinador.php?id='.$datas["IdAlumno"].'&value=borra">
                <input class="btn btn-outline-danger" type="button" name="btnBorrarCoordinador" value="borrar"/>
                </a></td>
                </tr>
            </tbody>
    </tfoot>
</table>  
</body>

');
        }
        ?>