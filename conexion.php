
<?php
    $serverName ="KURONEKO"; //serverName\instanceName
    
    $connectionInfo = array( "Database"=>"GarzasPlata", "UID"=>"sa", "PWD"=>"12345", "CharacterSet" => "UTF-8");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    
    if( $conn ) {
         echo "Conexión establecida.<br />";
    }else{
         echo "Conexión no se pudo establecer.<br />";
         die( print_r( sqlsrv_errors(), true));
    }
?>