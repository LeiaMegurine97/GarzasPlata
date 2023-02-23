<?php
    include('../Global/conexion.php');
    
    session_start();

    //RESEPCIÓN DE LAS VARIABLES
    $NoCuenta = $_POST['txtNoCuenta'];
    $Nip = $_POST['txtNip'];

    $query = "SELECT COUNT(*) as contar FROM Empleado where noCuenta= '$NoCuenta' and nip = '$Nip'";
    $consulta = sqlsrv_query($conn,$query);
    $array = sqlsrv_fetch_array($consulta);

    if ($array['contar']>0){
         $_SESSION['noCuenta'] = $NoCuenta;
         header("Location: ../principal.php");
         ?>
     <script> 
          alertify.set("notifier","position", "top-center");
          alertify.success("Bienvenido: "+$NoCuenta);
     </script>
     <?php
    }else{    
        ?>
     <script> 
          alertify.set("notifier","position", "top-center");
          //window.location.href="../login.php";
          alertify.error("El Nip o No. de Empleado es incorrecto, <br>Ingresalos nuevamente");
     </script>
     <?php
    }
    sqlsrv_close($conn);
?>