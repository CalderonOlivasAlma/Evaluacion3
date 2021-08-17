<?php
    require_once("conn.php");
    
    function nuevoUsuario($id,$nombre,$fecha,$fechaT,$tPiezas,$nPiezas,$piezasD){
        $query = "INSERT INTO lotes (no_lote, responsable, fecha_inicio_produccion, fecha_fin_produccion, tipo_pieza, no_piezas, no_defectuosas) VALUES ('$id', '$nombre', '$fecha', '$fechaT', '$tPiezas', '$nPiezas', '$piezasD')";
        $resp = NonQuery($query);
        return $resp;
    }
    
    function eliminar($id){
        $query = "DELETE FROM lotes WHERE no_lote = '$id'";
        $resp = NonQuery($query);
        return $resp;
    }
    
    function listar(){
        $query = "SELECT * FROM lotes";
        $resp = ObtenerRegN($query);
        return $resp;
    }
?>