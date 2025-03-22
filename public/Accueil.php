<?php include '../includes/header.php'; ?>

<!-- Formulaire de recherche -->
<form action="accueil.php" method="GET">
  <select name="categorie">
    <option value="fournitures">Fournitures Scolaires</option>
  </select>
  <input type="submit" value="Rechercher">
</form>

<!-- Affichage des produits -->
<div class="produits">
  <?php
  // Connexion à la BDD et requête SQL (ex: SELECT * FROM articles WHERE categorie = 'fournitures')
  // Boucle pour afficher chaque produit
  foreach ($produits as $produit) {
    echo "<div class='produit'>";
    echo "<h3>{$produit['nom']}</h3>";
    echo "<p>Prix : {$produit['prix']} €</p>";
    echo "<a href='panier.php?action=add&id={$produit['id_article']}'>Ajouter au panier</a>";
    echo "</div>";
  }
  ?>
</div>

<?php include '../includes/footer.php'; ?>