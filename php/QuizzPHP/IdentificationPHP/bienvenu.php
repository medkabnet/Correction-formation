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
        <h5>Votre Email:</h5>
        <!-- <p>< ?php echo $_POST["email"];  ?></p> -->
        <p><?= $_POST["email"] ?></p>

        <h5>Votre Mot de pass:</h5>
        <p><?= $_POST["password"] ?></p>
</body>
</html>
