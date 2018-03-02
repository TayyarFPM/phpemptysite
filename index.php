<?php
$connectionInfo = array( "Database"=>"TWHDev_DB", "UID"=>"TWHSurvey", "PWD"=>"Getmein@TWHSurvey123$", "Encrypt"=>true,
                        "TrustServerCertificate"=>false);
//$serverName="185.12.223.11";
$serverName="212.36.200.44";
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn ) { echo "Connection established."; 
            }else{ echo "Connection could not be established.";
                  //die( print_r( sqlsrv_errors(), true));
                 }
?>
