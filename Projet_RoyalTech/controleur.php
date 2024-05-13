<?php
require 'modele.php';

class Controlleur{
    // Contrôle des champs de saisie des inputs
    public function control_form_fields($loginUtilisa, $motPasse){
        $erreurs = array();
    
        if (empty($loginUtilisa)) {
            $erreurs["loginUtilisa"] = "style:text-red-600 Veuillez saisir un login pour l'utilisateur !";
        }
        // } elseif (!preg_match("#^[A-Za-z-']{2,}$#",  $loginUtilisa)) {
        //     $erreurs["loginUtilisa"] = "Mauvais identifiants<br>";
        
        if (empty($motPasse)) {
            $erreurs["motPasse"] = "style:text-red-600 Entrez votre mot de passe !";
        }
        // } elseif (!preg_match("#^(?=.*[A-Z])(?=.*[a-z])(?=.*\d) [A-Za-z\d]{6,}$#", $motPasse)) {
        //     $erreurs["motPasse"] = "style:text-red-600 Mot de     passe non valide : Au moins une lettre majuscule - Au     moins une lettre minuscule - Au moins un chiffre -     Longueur totale d'au moins 6 caractères. <br>";
    
        return $erreurs;
    }
    public function traitementFormulaire($loginUtilisa, $motPasse){
        //Appel de la fonction depuis la classe modèle
        $modele = new Modele();
        return $modele->check_user($loginUtilisa, $motPasse);
    }


    public function afficherArticles(){
        //Appel de la fonction depuis la classe modèle
        $modele = new Modele();
        return $modele->getArticles();
        
        // ob_start();
        // include "vue/article_commande.php";
        // $content = ob_get_clean();
        
        // return $articles;
   }
}
