<?php
require "database.php"; 
class modele {
    
    public function check_user($login, $password){
       try {
            $connexion = connect_db();
            $sql = "SELECT * from utilisateur WHERE nom = :login AND mot_passe = :password";
            $reponse = $connexion->prepare($sql);
            $reponse->bindParam(':login', $login, PDO::PARAM_STR_CHAR);
            $reponse->bindParam(':password', $password, PDO::PARAM_STR_CHAR);
            $reponse->execute();
            return $reponse->fetch();

        } catch (PDOException $e) {
            echo "ERREUR : Impossible de selectionner l'utilisateur";
        }
    }
        // Récupération de tous les articles
    public function getArticles(){
        try {
            $connexion = connect_db();
            // $articles = array();
            $stmt = $connexion->prepare("CALL GetArticles()");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }catch (PDOException $e) {
            throw $e;
        }
    }

    // public function getArticle($id_article){
    //     $connexion = connect_db();
    //     $sql = "SELECT * FROM article WHERE id_article = :id_article";
    //     $stmt = $connexion->prepare($sql);
    //     $stmt->bindParam(':id_article', $id_article);
    //     $stmt->execute();
    //     $article = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return $article;
    // }
    // public function getArticleByCategorie($categorie){
    //     $connexion = connect_db();
    //     $sql = "SELECT * FROM article WHERE categorie = :categorie";
    //     $stmt = $connexion->prepare($sql);
    //     $stmt->bindParam(':categorie', $categorie);
    //     $stmt->execute();
    //     $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $articles;
    // }
    // public function getArticleByDesignation($designation){
    //     $connexion = connect_db();
    //     $sql = "SELECT * FROM article WHERE designation = :designation";
    //     $stmt = $connexion->prepare($sql);
    //     $stmt->bindParam(':designation', $designation);
    //     $stmt->execute();
    //     $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $articles;
    // }
    // public function getArticleByPrix($prix_unitaire){
    //     $connexion = connect_db();
    //     $sql = "SELECT * FROM article WHERE prix_unitaire = :prix_unitaire";
    //     $stmt = $connexion->prepare($sql);
    //     $stmt->bindParam(':prix_unitaire', $prix_unitaire);
    //     $stmt->execute();
    //     $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $articles;
    // }
    // public function getArticleByQuantite($quantite_vendue){
    //     $connexion = connect_db();
    //     $sql = "SELECT * FROM article WHERE quantite_vendue = :quantite_vendue";
    //     $stmt = $connexion->prepare($sql);
    //     $stmt->bindParam(':quantite_vendue', $quantite_vendue);
    //     $stmt->execute();
    //     $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $articles;
    // }
}