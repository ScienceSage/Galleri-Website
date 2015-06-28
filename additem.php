<?php
$name = $_POST['name'];
$title = $_POST['title'];
$votes = 0;
//$image = $_POST['image'];
$image = "test data thing";

include_once 'sqltasks.php';
$conn = connect();

$sql = "INSERT INTO TestImages (Name, ImageTitle, Image) VALUES ('{$name}', '{$title}', '{$image}')";
$params = array(1, "some data");

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

?>