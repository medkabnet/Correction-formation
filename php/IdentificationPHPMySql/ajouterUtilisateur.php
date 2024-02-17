<?php
    require './dblogin.php';

    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $motDePasse = $_POST["password"];

    $motDePasseHashe = password_hash($motDePasse, PASSWORD_DEFAULT);

    $requeteInsert = $connexion->prepare("INSERT INTO utilisateur (nom, email, motDePass) VALUES (:nom, :email, :motDePass)");
    $requeteInsert->bindValue(':nom', $nom); 
    $requeteInsert->bindValue(':email', $email); 
    $requeteInsert->bindValue(':motDePass', $motDePasseHashe);
    $requeteInsert->execute();

    // Récupere le dernier ID
    $lastId = $connexion->lastInsertId();

    // Creation de cookie
    /** Parametre setcookie
     * nom du cookie : "site_login"
     * valeur / contenu du cookie : $lastId
     * durée du cookie en second : time()+ (3600 * 24)
     * le nombre de seconde depuit 1/1/1970:time()
     * 
     * 
     * Chemain  d'accès au site pour acceder au cookie : "/IdentificationPHPMySql/"
     *  Il est optionel 
     * 
     */

    setcookie(
        "site_login",
        $lastId,
        time()+ (3600 * 24),
        "/IdentificationPHPMySql/"
    );

    // Redirection ver une nouvelle page PHP
    header("location: ./bienvenu.php");
?>