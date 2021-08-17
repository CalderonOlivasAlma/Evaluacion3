<?php 
    require_once("utilidades.php");
    
    function escojer($datos = array()){
        switch($datos["funcion"]){
            case "nuevo":
                $resp = nuevoUsuario($datos["id"],$datos["nombre"],$datos["fecha"],$datos["fechaT"],$datos["tPiezas"],$datos["nPiezas"],$datos["piezasD"]);
                break;
            case "lista":
                $resp = listar();
                break;
            case "eliminar":
                $resp = eliminar($datos["id"]);
                
        }
        return($resp);
    }
?>