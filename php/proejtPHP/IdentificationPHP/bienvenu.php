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
        <h2>Votre Email  : <?php echo $_POST["email"]; ?></h2>
        <h2>Votre Mot de pass  : <?= $_POST["password"]; ?></h2>
        <?php 
        $motDePassHash = password_hash($_POST["password"],PASSWORD_DEFAULT);
        ?>
        <h2>Votre Mot de pass Hash : <?= $motDePassHash ; ?></h2>
</body>
</html>
