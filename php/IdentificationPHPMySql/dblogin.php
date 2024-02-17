<?php
    // Connexion Code PHP et Serveur Base de données
    // PDO
    $serveur = "localhost";
    // Compte Utilisateur par defaut sur xampp 
    /**
     * $utilisateur = "root"
     * $mot_de_passe = ""
     */

    // Compte Utilisateur par defaut sur mamp 
    /**
     * $utilisateur = "root"
     * $mot_de_passe = "root"
     */
    $utilisateur = "root"; 
    $mot_de_passe = "root"; 
    $base_de_donnees = "Utilisateurs";
    $connexion = null;
    try {
        // Connexion à PDO
        $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur,
        $mot_de_passe);
        // Définir le mode d'erreur sur Exception $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Utilisation de la connexion...
    } 
    catch (PDOException $e) {
        die("Échec de la connexion : " . $e->getMessage());
    }
    // Fermer la connexion (PDO se ferme automatiquement à la fin du script) 
?>