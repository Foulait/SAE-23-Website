// fonction utilisée pour vérifier les codes de cartes bancaire il faut l'intégrer à la page de paiement.
<php include_once '../includes/bdd.php';?>
function luhnValidation($numero) {
    $sum = 0;
    $len = strlen($numero);
    for ($i = $len - 1; $i >= 0; $i--) {
        $digit = $numero[$i];
        if ($i % 2 == 1) {
            $digit = $digit * 2;
            if ($digit > 9) {
                $digit -= 9;
            }
        }
        $sum += $digit;
    }
    return $sum % 10 === 0;
}
