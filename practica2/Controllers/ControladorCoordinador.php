<?php
include_once("../models/ClassCoordinador.php");


if(isset($_REQUEST["btnCoordinador"])){
    $Coordinador = new Coordinador();


    header("location:../Coordinador/AddCoordinador.php");

     //print($Coordinador-> nombre);
    
}elseif(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="borra")){
    $id=$_REQUEST['id'];
    $Coordinador= new Coordinador();
    $Coordinador->borrarCoordinador($id);

}elseif(isset($_REQUEST["btnactualizarCoordinador"])){

    $Coordinador = new Coordinador();
    //$Coordinador-> ActualizarCoordinador(1234, "pedro" , "perez", "hola@hola");
    header("location:../Coordinador/AddCoordinador.php");
    $Coordinador -> addCoordinador(12,"hola", "hola","hola","Hola","hola");
}elseif(isset($_REQUEST["btnNewCoordinador"])){
    $nombre = $_REQUEST["newNameCoordinador"];
    $Coordinador = new Coordinador();
    $Coordinador -> addCoordinador(22,$nombre,"hola","hola","hola","hola");

}

?>

