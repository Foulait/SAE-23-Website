<?php include '../includes/header.php'; ?>
include_once '../includes/bdd.php';
include_once '../includes/auth.php';
<main class="container auth-container">
    <div class="tabs">
        <button class="tab-link active" data-tab="login">Connexion</button>
        <button class="tab-link" data-tab="register">Inscription</button>
    </div>

    <!-- Formulaire Connexion -->
    <form id="login" class="tab-content active">
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Mot de passe" required>
        <button type="submit" class="btn">Se connecter</button>
    </form>

    <!-- Formulaire Inscription -->
    <form id="register" class="tab-content">
        <input type="text" placeholder="Nom complet" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Mot de passe" required>
        <textarea placeholder="Adresse de livraison"></textarea>
        <button type="submit" class="btn">S'inscrire</button>
    </form>
</main>

<script src="../public/js/script.js"></script>
<?php include '../includes/footer.php'; ?>
