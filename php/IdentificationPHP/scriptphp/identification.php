<?php
    // Ajouter le script de connexion
    require_once "./dbLogin.php";

    $email = $_POST["email"];
    $mot_de_passe = $_POST["password"];

    $requeteSelect = $connexion->prepare("SELECT nom,motDePass FROM utilisateur WHERE email = :email");
    $requeteSelect->bindValue(':email', $email, PDO::PARAM_STR); 
    $requeteSelect->execute();
    // Récupération des résultats
    $resultats = $requeteSelect->fetchAll(PDO::FETCH_ASSOC); // Utilisez $resultats comme nécessaire
    
    if(count($resultats) == 0){
        echo "Email ou mot de pass incorrect";
    }else{
        $mot_de_passe_hash = $resultats[0]["motDePass"];
        $nom = $resultats[0]["nom"];
        if(password_verify($mot_de_passe,$mot_de_passe_hash)){
            header("location: ../bienvenu.php?nom=".$nom );
        }
        else{
            echo "Email ou mot de pass incorrect";
        }
    }