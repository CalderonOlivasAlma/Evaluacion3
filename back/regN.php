<?php
    require_once("../APIRest/index.php");
    
    $datos = array();
    $datos["id"] = $_POST["numero"];
    $datos["nombre"] = $_POST["nombre"];
    $datos["fecha"] = $_POST["fecha"];
    $datos["fechaT"] = $_POST["fecha_ter"];
    $datos["tPiezas"] = $_POST["Tpiezas"];
    $datos["nPiezas"] = $_POST["Npiezas"];
    $datos["piezasD"] = $_POST["piezasD"];
    //$datos["fecha"] = date("Y-m-d",Time());    
    $datos["funcion"] = "nuevo";
    
    $ejecucion = escojer($datos);

    print_r($datos);

    echo '<meta http-equiv="refresh" content="1; url=../">';
?>