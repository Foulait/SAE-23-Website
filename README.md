Cahier des charges 

1) Dans la page d’accueil, le client recherche un type de produit dans une des catégories fournitures scolaires,
(pour les accessoires et consommables).

3) Un tri par marque et par prix est proposé pour l’affichage des résultats.

4) Les résultats de la recherche sont affichés en respectant le critère de tri. Chaque produit
est suivi d’un lien permettant sa sélection.

5) La sélection d’un produit entraîne sa mise en panier.
SAE 13 – Mettre en place une solution informatique pour l'entreprise
Page | 35

6) Après chaque sélection, le client peut soit rechercher un autre produit, soit terminer sa
commande.

7) Dans ce dernier cas, l’ensemble de sa commande est affichée, et vous lui demandez ses
coordonnées.

8) Si le client n’est pas encore enregistré, il saisit ses coordonnées complètes. Son adresse
e-mail et un mot de passe lui serviront à s’identifier par la suite. Il saisit également
l’adresse de livraison, (son adresse). Ces informations sont stockées à l’aide de sessions
pour être transmises aux pages suivantes de la procédure d’achat.

9) Si le visiteur est déjà client, il ne saisit que son e-mail et son mot de passe. L’authenticité
de ces informations est vérifiée dans la base, et les coordonnées complètes du client
sont récupérées. Ces coordonnées sont utilisées pour remplir automatiquement un
formulaire identique à celui du visiteur non enregistré. Ces informations sont également
stockées à l’aide de sessions.

10) La phase de paiement par carte bancaire n’étant pas réalisable sans une convention
bancaire, vous vous contentez de demander la saisie d’un numéro de carte et d’utiliser
un algorithme de vérification du numéro.

10)Si le paiement est bien réalisé, vous finalisez la transaction en enregistrant l’ensemble
des informations dans les tables client, commande puis confirmer la commande au
client.
