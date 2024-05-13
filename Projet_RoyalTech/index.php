<?php
//  Point d'entrée principal de l'application
require 'controleur.php';

try {
    if (!isset($_GET['action'])) {
        // Si aucune action n'est spécifiée, afficher la page par défaut
        require 'vue/content.php';
    } else {

        if ($_GET['action'] =='login') {

            $monControleur = new Controlleur();
            $erreurs =  $monControleur->control_form_fields($_POST["loginUtilsat"], $_POST["motdepasse"]);

            if(empty($erreurs)){
                $utilisateur = $monControleur->traitementFormulaire($_POST["loginUtilsat"], $_POST["motdepasse"]);
                require 'vue/article_commande.php';

                // var_dump($utilisateur);
                // die();

            }else{
                require 'vue/content.php';
            }

        // } elseif ($_GET['action'] =='afficherArticles') {
        //     $monControleur = new Controlleur();
        //     $monControleur->afficherArticles();

        } else {
            throw new Exception("Action non valide");
        }
    }
    // Appel de la méthode afficherArticles du contrôleur
    // $controlleur = new Controlleur();
    // $articles = $controlleur->afficherArticles();

    // var_dump($articles);

    // ob_start();
    // include "vue/article_commande.php";
    // $content = ob_get_clean();

    //Gestion des erreurs
} catch (Exception $e) {
    $msgError = $e->getMessage();
    require 'vue/erreur.php';
}