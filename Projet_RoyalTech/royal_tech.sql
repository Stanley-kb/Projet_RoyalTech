CREATE TABLE article(
   Id_article VARCHAR(5) PRIMARY KEY,
   designation VARCHAR(100),
   prix DECIMAL(15,2),
   cathegorie VARCHAR(100)
);

CREATE TABLE client(
   Id_client INT AUTO_INCREMENT PRIMARY KEY,
   civilite VARCHAR(5),
   nom VARCHAR(50),
   prenom VARCHAR(50),
   age INT,
   adresse VARCHAR(100),
   ville VARCHAR(30),
   code_postal VARCHAR(5),
   mail VARCHAR(150)
);

CREATE TABLE Role(
   Id_Role INT AUTO_INCREMENT PRIMARY KEY,
   libelle_id VARCHAR(30)
);

CREATE TABLE commande(
   Id_commande INT AUTO_INCREMENT PRIMARY KEY,
   dates DATE,
   Id_client INT NOT NULL,
   FOREIGN KEY(Id_client) REFERENCES client(Id_client)
);

CREATE TABLE Utilisateur(
   Id_Utilisateur INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   mot_passe VARCHAR(50),
   Id_Role INT NOT NULL,
   FOREIGN KEY(Id_Role) REFERENCES Role(Id_Role)
);

CREATE TABLE ligne(
   Id_article VARCHAR(5),
   Id_commande INT,
   quantite INT,
   prix DOUBLE,
   PRIMARY KEY(Id_article, Id_commande),
   FOREIGN KEY(Id_article) REFERENCES article(Id_article),
   FOREIGN KEY(Id_commande) REFERENCES commande(Id_commande)
);
-- CREATE TABLE Utilisateur_Role (
--    Id_Utilisateur INT,
--    Id_Role INT,
--    PRIMARY KEY(Id_Utilisateur, Id_Role),
--    FOREIGN KEY(Id_Utilisateur) REFERENCES Utilisateur(Id_Utilisateur),
--    FOREIGN KEY(Id_Role) REFERENCES Role(Id_Role)
-- );

-- -- Ajout des rôles prédéfinis
-- INSERT INTO Role (nom_role) VALUES ('Admin'), ('Editeur'), ('Lecteur');


INSERT INTO ligne (id_article, Id_commande, quantite, prix) VALUES
('CA300', 5, 1, 329),
('CAS07', 1, 3, 26.9),
('CAS07', 6, 3, 26.9),
('CAS07', 12, 4, 26.9),
('CP100', 6, 1, 1490),
('CP100', 8, 1, 1490),
('CS330', 1, 1, 1629),
('CS330', 3, 2, 1629),
('CS330', 12, 3, 1629),
('DEL30', 10, 2, 1715),
('DVD75', 4, 2, 17.5),
('DVD75', 11, 10, 17.5),
('HP497', 2, 2, 1500),
('NIK55', 9, 1, 269),
('NIK80', 3, 5, 479),
('SAX15', 7, 5, 1999),
('SAX15', 10, 1, 1999),
('SAX15', 13, 2, 1999),
('SOXMP', 4, 3, 2399),
('SOXMP', 8, 1, 2399);