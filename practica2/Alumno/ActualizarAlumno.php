<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<h1>ActualizarAlumno</h1>
    <?php
    require_once("../models/classalummno.php");
    $id=$_REQUEST['id'];
    $alumno=new Alumno();
    $datoss=$alumno -> consultarAlumno ($id);
    while ($data=$datoss -> fetch(PDO::FETCH_ASSOC)){


    print('
<form action="../Alumno/controladoralumno.php" method="post">
<input type="text"value'.$data["IdAlumno"].' name="actIdAlumno" id="newNameAlumno"  > <br>
nombre: <input type="text"value'.$data["nombre"].' name="actNameAlumno" id="newNameAlumno"  > <br>
    apellido: <input type="text"value'.$data["Apellido"].' name="actApellAlumno" id="actApellAlumno"> <br>
    correo: <input type="text"value'.$data["Correo"].' name="actCorreoAlumno" id="newCorreoAlumno"> <br>
    telefono: <input type="text"value'.$data["Telefono"].' name="actTelAlumno" id="actTelAlumno"> <br>
    programa <input type="text"value'.$data["Programa"].' name="actProgAlumno" id="actProgAlumno"> <br>
<input type="submit" name="btnactAlumno" id="btnactAlumno">');}
?>
</div>
</form>
</body>
</html>