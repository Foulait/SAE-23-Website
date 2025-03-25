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
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limite = 10;
$offset = ($page - 1) * $limite;

$stmt = $pdo->prepare("SELECT * FROM articles LIMIT ? OFFSET ?");
$stmt->execute([$limite, $offset]);

<div class="pagination">
    <?php for ($i = 1; $i <= $nombre_pages; $i++): ?>
        <a href="?page=<?= $i ?>" class="<?= $i == $page ? 'active' : '' ?>"><?= $i ?></a>
    <?php endfor; ?>
</div>

?>
