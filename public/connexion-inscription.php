<?php 
include '../includes/header.php';
include_once '../includes/bdd.php';
include_once '../includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];
        
        if (connecterClient($email, $mot_de_passe)) {
            header('Location: profil.php');
            exit();
        } else {
            $erreur = "Email ou mot de passe incorrect.";
        }
    }
}
?>

<!-- Formulaire de connexion existant -->
<form id="login" class="tab-content active" method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
    <?php if (isset($erreur)) echo "<p class='erreur'>$erreur</p>"; ?>
    <button type="submit" class="btn">Se connecter</button>
</form>

<main class="container auth-container">
    <div class="tabs">
        <button class="tab-link active" data-tab="login">Connexion</button>
        <button class="tab-link" data-tab="register">Inscription</button>
    </div>

    <!-- Formulaire Inscription -->
    <form id="register" class="tab-content">
        <input type="text" placeholder="Nom complet" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Mot de passe" required>
        <textarea placeholder="Adresse de livraison"></textarea>
        <button type="submit" class="btn">S'inscrire</button>
    </form>
    <form method="POST">
    <input type="hidden" name="csrf_token" value="<?= genererTokenCSRF() ?>">
    <!-- ... autres champs ... -->
    </form>
</main>
<script src="../public/js/script.js"></script>
<?php include '../includes/footer.php'; ?>
