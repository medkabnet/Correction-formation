<?php 
    if(isset($_COOKIE["site_login"]) == true){
        header("location: ./bienvenu.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
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

        form {
            background-color: #fff;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Inscription</h1>
    <form method="post" action="./ajouterUtilisateur.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br><br>
        
        <label for="email">Email :</label>
        <input type="email" name="email" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>

    <a href="./index.php">Se connecter</a>
</body>
</html>