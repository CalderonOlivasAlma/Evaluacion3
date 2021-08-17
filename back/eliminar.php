<?php
    session_start();
    require_once("../APIRest/index.php");
    
    $datos = array();
    $datos["id"] = $_GET["id"];
    $datos["funcion"] = "eliminar";
    $ejecucion = escojer($datos);

    echo '<meta http-equiv="refresh" content="1; url=../formularios/eliminar.php">';

?>