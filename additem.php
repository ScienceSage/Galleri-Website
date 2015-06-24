<?php
$name = $_POST['name'];
$title = $_POST['title'];
$votes = 0;
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

include_once 'sqltasks.php';
$conn = connect();

$sql = "INSERT INTO TestImages (Name, ImageTitle) VALUES ('{$name}', '{$title}')";
$params = array(1, "some data");

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

?>