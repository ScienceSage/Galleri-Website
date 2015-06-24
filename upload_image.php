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
    <h2>Upload some stuff</h2>
    
    <form action="additem.php" method="post" enctype="multipart/form-data">
    Name:<br>
    <input type="text" name="name">
    <br>
    Title of Image:<br>
    <input type="text" name="title">
    <br>
    <label>File: </label><input type="file" name="image" />
    <br><br>
    <input type="submit" value="Submit">
    </form> 
    
    <?php 
	

    ?> 
    
    
</body>
</html> 