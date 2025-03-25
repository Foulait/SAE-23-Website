<?php
// Récupère l'historique des commandes
function getHistoriqueCommandes($id_client) {
    global $pdo;
    $stmt = $pdo->prepare("
        SELECT c.*, a.nom AS article_nom 
        FROM commandes c
        JOIN articles a ON c.id_article = a.id_article
        WHERE c.id_client = ?
    ");
    $stmt->execute([$id_client]);
    return $stmt->fetchAll();
}
?>
