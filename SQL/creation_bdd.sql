-- Création de la table `clients`
CREATE TABLE clients (
  id_client INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) UNIQUE NOT NULL,
  mot_de_passe VARCHAR(255) NOT NULL,
  nom VARCHAR(50) NOT NULL,
  adresse_livraison TEXT NOT NULL,
  telephone VARCHAR(20)
);

-- Création de la table `articles`
CREATE TABLE articles (
  id_article INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  categorie ENUM('fournitures') NOT NULL,
  marque VARCHAR(50),
  prix DECIMAL(10,2) NOT NULL,
  stock INT NOT NULL
);

-- Création de la table `commandes`
CREATE TABLE commandes (
  id_commande INT AUTO_INCREMENT PRIMARY KEY,
  id_client INT NOT NULL,
  date_commande DATETIME DEFAULT CURRENT_TIMESTAMP,
  statut ENUM('En attente', 'Validée', 'Expédiée'),
  FOREIGN KEY (id_client) REFERENCES clients(id_client)
);