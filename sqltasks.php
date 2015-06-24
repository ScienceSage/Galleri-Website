<?php
function connect()
{
	$server = "tcp:m0oyvtw1iy.database.windows.net,1433"; 
	$user = "usr_sage@m0oyvtw1iy";
	$pwd = "90MB26#!";
	$db = "GalleriDB";

    $conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));
    if( $conn ) {
         echo "Connection established.<br />";
    }else{
         echo "Connection could not be established.<br />";
         die( print_r( sqlsrv_errors(), true));
    }
	return $conn;
}
?>