<?php
    include('../Global/conexion.php');
    //RECEPCIÓN DE VARIABLES
    $nombre=$_POST['txtNomDep'];
    $tipo=$_POST['CboxTipDep'];
    $estado=$_POST['CboxEstDep'];
    //CONSULTA PARA INSERTAR
    $query ="INSERT INTO Deporte (nombre, tipo, activo) VALUES ('$nombre','$tipo','$estado')";
    
    //CONSULTA PARA EVITAR DUPLICIDADES
    $verDeporte=sqlsrv_query($conn, "SELECT COUNT(*) AS contar FROM Deporte WHERE nombre ='$nombre' AND tipo ='$tipo'");
    $array=sqlsrv_fetch_array($verDeporte);
    if($array['contar']>0){
        echo 'ERROR!, EL DEPORTE QUE INTENTA REGISTRAR YA SE ENCUENTRA EN LA BASE DE DATOS.';
        exit;
    }else{
        //EJECUTAR CONSULTA
        $consulta = sqlsrv_query($conn, $query);
        if(!$consulta){
            echo'Error al intentar registrar el deporte';
            exit;
        }else{
            echo 'El registro se efectuo corrrectamente';
        }
    }
        
        
    
    
    //CERRAR CONEXIÓN
    sqlsrv_close($conn);
?>