<?php
session_start();
include '../includes/header.php';

// Ajouter un produit au panier
if (isset($_GET['action']) && $_GET['action'] == 'add') {
  $id = $_GET['id'];
  $_SESSION['panier'][$id] = 1; // Quantité par défaut
}
?>

<h2>Votre Panier</h2>
<?php foreach ($_SESSION['panier'] as $id => $quantite): ?>
  <!-- Afficher chaque produit (récupérer les infos depuis la BDD) -->
<?php endforeach; ?>

<a href="accueil.php">Continuer les achats</a>
<a href="saisieclient.php">Valider la commande</a>

<?php include '../includes/footer.php'; ?>