<?php include '../includes/header.php'; 
include_once '../includes/bdd.php';
?>
<main class="container">
    <!-- Filtres -->
    <aside class="filters">
        <h2>Filtrer par :</h2>
        <form id="filterForm">
            <div class="filter-group">
                <label>Catégorie :</label>
                <select name="categorie">
                    <option value="fournitures">Fournitures Scolaires</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label>Marque :</label>
                <input type="text" name="marque">
            </div>
            
            <div class="filter-group">
                <label>Prix max :</label>
                <input type="range" name="prix" min="0" max="100" value="50">
            </div>
        </form>
    </aside>

    <!-- Liste des produits -->
    <section class="product-grid">
        <!-- Exemple de produit -->
        <article class="product-card">
            <img src="../public/img/crayons.jpg" alt="Crayons">
            <h3>Pack de crayons HB</h3>
            <p class="marque">Marque : Bic</p>
            <p class="prix">5.99 €</p>
            <button class="btn-add">Ajouter au panier</button>
        </article>

        <!-- Répéter pour d'autres produits -->
    </section>
</main>

<?php include '../includes/footer.php'; ?>
