 <!DOCTYPE html>
<html lang="en">

<head>
    <title>GALLERi Image Viewer</title>
    
    <link href="styles/galleri.css"     		 rel="stylesheet" type="text/css">
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="/scripts/navigation.js"></script>
</head>

<body class="g-font">

    <h1>Welcome to GALLERi Uploader</h1>
    <h2>View some art</h2>
    
    <?php 
    // DB connection info
	$host = "tcp:m0oyvtw1iy.database.windows.net,1433"; 
	$user = "usr_sage@m0oyvtw1iy";
	$pwd = "90MB26#!";
	$db = "GalleriDB";
    $conn = sqlsrv_connect($server, array("UID"=>$user, "PWD"=>$pwd, "Database"=>$db));

    if($conn === false){
        die(print_r(sqlsrv_errors()));
    }
//	try{
//		$conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
//		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//	}
//	catch(Exception $e){
//		die(print_r($e));
//	}

    $conn = connect();
    echo "connected";
	$sql = "SELECT * FROM items";
	$stmt = $conn->query($sql);
    echo "queried";
	$items = $stmt->fetchAll(PDO::FETCH_NUM);
    echo "made it to here!";
    echo "item: " . items[1];

//    $sql = "SELECT * FROM TestImages";
//    echo "here 1 ";
//    $result = $conn->query($sql);
//    echo "here ";
//    if ($result->num_rows > 0) {
//        echo "sup";
//        // output data of each row
//        while($row = $result->fetch_assoc()) {
//            echo "Name: " . $row["Name"]. "<br>";
//        }
//    } else {
//        echo "0 results";
//    }
//    $conn->close();

//    $sql = "INSERT INTO TestImages (Name)
//    VALUES ('John')";
//
//    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
//
//    $conn->close();
    ?> 
    
    
</body>
</html> 