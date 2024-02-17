<?php 
    if(isset($_COOKIE["site_login"]) == false){
        header("location: ./index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Bienvenue</h1>
</body>
</html>
