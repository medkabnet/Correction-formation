<?php
    // Ajouter le script de connexion
    require_once "./dbLogin.php";

    // Hasher le mot de pass
    $mot_de_passe = password_hash($_POST["password"],PASSWORD_DEFAULT);

    // Ajouter des variables
    $nom = $_POST["nom"];
    $email = $_POST["email"];

    $requeteInsert = $connexion->prepare("INSERT INTO utilisateur (nom, email, motDePass ) VALUES (:nom, :email, :motDePass)");
    $requeteInsert->bindValue(':nom', $nom, PDO::PARAM_STR); 
    $requeteInsert->bindValue(':email', $email, PDO::PARAM_STR); 
    $requeteInsert->bindValue(':motDePass', $mot_de_passe, PDO::PARAM_STR);
    $requeteInsert->execute();

    header("location: ../bienvenu.php?nom=".$nom );
