<?php 
    $host = "sql206.epizy.com";
    $user = "epiz_29452565";
    $pwd = "aUetoWwsrJhX0Z";
    $db = "epiz_29452565_ev3";
    try {
        $conn = new PDO("mysql:host={$host};dbname={$db};charset=utf8", $user, $pwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $exception) {
        exit($exception->getMessage());
    }
    //insert, update, delete
    function NonQuery($sqlsrt, &$conn = null){
        if(!$conn) global $conn;
        $sentencia = $conn->prepare($sqlsrt);
        if($sentencia->execute()){
            $resp = True;
        } else{
            $resp = False;
        }
        return $resp;
    }
    //select 1
    function ObtenerReg($sqlsrt, &$conn = null){
        if(!$conn) global $conn;
        $sentencia = $conn->prepare($sqlsrt);
        if ($sentencia->execute()) {
            $resp = array();
            while ($fila = $sentencia->fetch()) {
                $resp = $fila;
            }
        }
        return $resp;
    }
    //select N
    function ObtenerRegN($sqlsrt, &$conn = null){
        if(!$conn) global $conn;
        $sentencia = $conn->prepare($sqlsrt);
        if ($sentencia->execute()) {
            $resp = array();
            while ($fila = $sentencia->fetch()) {
                $resp[] = $fila;
            }
        }
        return $resp;
    }
?>