<?php
// Ajoute un produit au panier
function ajouterAuPanier($id_article, $quantite = 1) {
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }
    $_SESSION['panier'][$id_article] = $quantite;
}

// Calcule le total du panier
function calculerTotalPanier() {
    global $pdo;
    $total = 0;
    if (isset($_SESSION['panier'])) {
        foreach ($_SESSION['panier'] as $id => $quantite) {
            $stmt = $pdo->prepare("SELECT prix FROM articles WHERE id_article = ?");
            $stmt->execute([$id]);
            $prix = $stmt->fetchColumn();
            $total += $prix * $quantite;
        }
    }
    return $total;
}
?>
