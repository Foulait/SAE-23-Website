// Gestion des onglets Connexion/Inscription
document.querySelectorAll('.tab-link').forEach(button => {
    button.addEventListener('click', () => {
        const tabId = button.dataset.tab;
        
        // Désactiver tous les onglets
        document.querySelectorAll('.tab-link, .tab-content').forEach(el => {
            el.classList.remove('active');
        });
        
        // Activer l'onglet cliqué
        button.classList.add('active');
        document.getElementById(tabId).classList.add('active');
    });
});

// Gestion de l'ajout au panier
document.querySelectorAll('.btn-add').forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        // Ajouter une logique AJAX ici
        alert('Produit ajouté au panier !');
    });
});
