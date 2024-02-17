<?php
    require './dblogin.php';

    $email = $_POST["email"];
    $motDePasse = $_POST["password"];

    $requeteSelect = $connexion->prepare("SELECT * FROM utilisateur WHERE email = :email");
    $requeteSelect->bindValue(':email', $email); 
    $requeteSelect->execute();
    // Récupération des résultats
    $resultats = $requeteSelect->fetchAll(PDO::FETCH_ASSOC);
    if(count($resultats) == 0){
        header("location: ./index.php?erreur=login");
    }else{
        $compte = $resultats[0];
        if (password_verify($motDePasse, $compte['motDePass']) == true) {
            setcookie(
                "site_login",
                $compte["id"],
                time()+ (3600 * 24),
                "/IdentificationPHPMySql/"
            );
        
            // Redirection ver une nouvelle page PHP
            header("location: ./bienvenu.php");
        }
        else{
            header("location: ./index.php?erreur=login");
        }
    }
?>