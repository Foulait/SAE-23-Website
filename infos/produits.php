<?php
// Récupère les produits filtrés
function getProduits($categorie = null, $marque = null, $prixMax = 100) {
    global $pdo;
    $sql = "SELECT * FROM articles WHERE 1=1";
    $params = [];

    if ($categorie) {
        $sql .= " AND categorie = ?";
        $params[] = $categorie;
    }
    if ($marque) {
        $sql .= " AND marque = ?";
        $params[] = $marque;
    }
    $sql .= " AND prix <= ? ORDER BY prix ASC";
    $params[] = $prixMax;

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}
?>
