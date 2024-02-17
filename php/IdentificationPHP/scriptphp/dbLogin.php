<?php
    $serveur = "localhost";
    $utilisateur = "root"; 
    $mot_de_passe = "root"; 
    $base_de_donnees = "utilisateur";
    $connexion = null;
    try {
        // Connexion à PDO
        $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur,
        $mot_de_passe);
        // Définir le mode d'erreur sur Exception $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Utilisation de la connexion...
    } catch (PDOException $e) {
        die("Échec de la connexion : " . $e->getMessage());
    }
    // Fermer la connexion (PDO se ferme automatiquement à la fin du script) 
?>
