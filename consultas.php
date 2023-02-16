<?php
    include ('conexion.php');
    session_start();

    $NoCuenta = $_POST['NoCuentatxt'];
    $Nip = $_POST['Niptxt'];

    $query = "SELECT COUNT(*) as contar FROM Empleado where noCuenta= '$NoCuenta' and nip = '$Nip'";
    $consulta = sqlsrv_query($conn,$query);
    $array = sqlsrv_fetch_array($consulta);

    if ($array['contar']>0){
        $_SESSION['noCuenta'] = $NoCuenta;
        //header('Location: inicio.php');
    }else{    
        echo '<script type="text/javascript"> 
		window.location.href="login.php";
        alert("Error!, No se puede iniciar sesion debido a un error en los datos ingresados.");
        </script>';
    }
?>