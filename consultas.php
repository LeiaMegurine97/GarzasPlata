<?php
    include ('Global/conexion.php');
    session_start();
    
    //RESEPCIÓN DE LAS VARIABLES
    $NoCuenta = $_POST['NoCuentatxt'];
    $Nip = $_POST['Niptxt'];

    $query = "SELECT COUNT(*) as contar FROM Empleado where noCuenta= '$NoCuenta' and nip = '$Nip'";
    $consulta = sqlsrv_query($conn,$query);
    $array = sqlsrv_fetch_array($consulta);

    if ($array['contar']>0){
        $_SESSION['noCuenta'] = $NoCuenta;
        header('Location: index.html');
    }else{    
        echo '<script type="text/javascript"> 
		window.location.href="login.php";
        alert("Error!, No. de Empleado o Nip incorrectos. Ingreselos nuevamente de manera correcta.");
        </script>';
    }
?>