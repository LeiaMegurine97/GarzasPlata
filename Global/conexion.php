<!doctype html>
<html>
     <head>
          <title>Conexión</title>
          <link rel="stylesheet" type="text/css" href="../AlertifyJS/CSS/alertify.css">
          <link rel="stylesheet" type="text/css" href="../AlertifyJS/CSS/Themes/default.css">
          <script src="JS/jquery-3.4.1.min.js"></script>
          <script src="../AlertifyJS/alertify.min.js"></script>
     </head>
</html>
<?php
    $serverName ="KURONEKO"; //serverName\instanceName
    
    $connectionInfo = array( "Database"=>"GarzasPlata", "UID"=>"sa", "PWD"=>"12345", "CharacterSet" => "UTF-8");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    
    if( $conn ) {
     ?>
     <!--script> 
          alertify.set("notifier","position", "top-center");
          alertify.success("Conexión establecida.");
     </script-->
     <?php
    }else{
     ?>
     <script> 
          alertify.set("notifier","position", "top-center");
          alertify.error("Conexión no se pudo establecer.");
     </script>
     <?php
         die();
    }
?>