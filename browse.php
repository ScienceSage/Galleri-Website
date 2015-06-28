<!DOCTYPE html>
<html lang="en">

<head>
    <title>GALLERi Browser</title>
    
    <link href="styles/galleri.css"     		 rel="stylesheet" type="text/css">
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="/scripts/navigation.js"></script>
</head>

<body class="g-font">

    <h1>Welcome to GALLERi Browser</h1>
    <h2>Browse some art</h2>
    
    <?php
    include_once 'sqltasks.php';
    $conn = connect();
    
    if(($result = sqlsrv_query($conn,"SELECT * FROM TestImages")) !== false){
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
            echo $row['Name']."<br />"."Image: <img>".$row['Image']."</img>";
        }
    }
    ?>
    
    
</body>
</html> 