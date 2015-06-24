<?php
$name = $_POST['name'];
$title = $_POST['title'];
$votes = 0;

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

$sql = "INSERT INTO TestImages (Name, ImageTitle) VALUES ($name, 'test title')";
$params = array(1, "some data");

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

?>