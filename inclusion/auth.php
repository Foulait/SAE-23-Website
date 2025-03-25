<?php
session_start();

function genererTokenCSRF() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validerTokenCSRF($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!validerTokenCSRF($_POST['csrf_token'])) {
        die('Token CSRF invalide !');
    }
}
// Déconnexion
function deconnecterClient() {
    session_unset();
    session_destroy();
}
?>
