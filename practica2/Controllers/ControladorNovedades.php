<?php
include_once("../models/ClassNovedades.php");


if(isset($_REQUEST["btnNovedades"])){
    $Novedades = new Novedades();


    header("location:../Novedades/AddNovedades.php");

     //print($Novedades-> nombre);
    
}elseif(isset($_REQUEST["btnBorrarNovedades"])){

    $Novedades = new Novedades();
    $Novedades -> borrarNovedades(12345);


}elseif(isset($_REQUEST["btnactualizarNovedades"])){

    $Novedades = new Novedades();
    //$Novedades-> ActualizarNovedades(1234, "pedro" , "perez", "hola@hola");
    header("location:../Novedades/AddNovedades.php");
    $Novedades -> addNovedades(12,"hola", "hola","hola","Hola","hola");


}elseif(isset($_REQUEST["btnNewNovedades"])){
    $nombre = $_REQUEST["newNameNovedades"];
    $Novedades = new Novedades();
    $Novedades -> addNovedades(22,$nombre,"hola","hola","hola","hola");

}

?>

