<?php
session_start();

// Vérifie si l'utilisateur est connecté
function estConnecte() {
    return isset($_SESSION['client']);
}

// Connexion utilisateur
function connecterClient($email, $mot_de_passe) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM clients WHERE email = ?");
    $stmt->execute([$email]);
    $client = $stmt->fetch();

    if ($client && password_verify($mot_de_passe, $client['mot_de_passe'])) {
        $_SESSION['client'] = $client;
        return true;
    }
    return false;
}

// Déconnexion
function deconnecterClient() {
    session_unset();
    session_destroy();
}
?>
