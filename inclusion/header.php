<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique de Fournitures Scolaires</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="accueil.php">E-Store</a>
            </div>
            
            <ul class="nav-links">
                <li><a href="accueil.php" class="<?= basename($_SERVER['PHP_SELF']) == 'accueil.php' ? 'active' : '' ?>">Accueil</a></li>
                <li><a href="panier.php" class="<?= basename($_SERVER['PHP_SELF']) == 'panier.php' ? 'active' : '' ?>">Panier</a></li>
                
                <!-- Si utilisateur connecté -->
                <?php if(isset($_SESSION['client'])): ?>
                    <li><a href="profil.php">Mon Compte</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                <!-- Si non connecté -->
                <?php else: ?>
                    <li><a href="connexion.php">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
