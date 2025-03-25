<?php include '../includes/header.php'; ?>

<main class="container">
    <h1>Votre Panier</h1>
    
    <table class="cart-table">
        <thead>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <!-- Exemple d'article -->
            <tr>
                <td>
                    <img src="../public/img/crayons.jpg" alt="Crayons" class="cart-img">
                    Pack de crayons HB
                </td>
                <td>5.99 €</td>
                <td><input type="number" value="1" min="1"></td>
                <td>5.99 €</td>
            </tr>
        </tbody>
    </table>

    <div class="cart-actions">
        <a href="accueil.php" class="btn">Continuer les achats</a>
        <a href="paiement.php" class="btn btn-primary">Passer la commande</a>
    </div>
</main>

<?php include '../includes/footer.php'; ?>
