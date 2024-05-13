<?php
$title = "Liste des Articles Commandés";
ob_start();
?>
<main class="bg-gray-400 h-full w-full">
<h1 class="text-3xl text-center p-1">Liste des Articles Commandés</h1>
<br>
<br>
<table class="montableau">
   <tr class="">
        <th> ID Article </th>
        <th> Désignation </th>
        <th> Prix Unitaire </th>
        <th> Catégorie </th>
        <th> Quantité Vendue </th>
    </tr>

    <!-- Affichage du Tableau Article avec foreach -->
    <?php
     if(isset($articles) && is_array($articles)): 
     ?>
    <?php foreach ($articles as $article): ?>
        <tr>
            <td><?php echo $article['id_article']; ?></td>
            <td><a><?php echo $article['designation']; ?></a></td>
            <td><?php echo $article['prix_unitaire']; ?></td>
            <td><?php echo $article['categorie']; ?></td>
            <td><?php
            //  echo $article['quantite_vendue']; 
            ?></td>
        </tr>
    <?php endforeach; ?>
    <?php
     endif; 
    ?>
</table>
</main>
<?php
$content = ob_get_clean();
include "baselayout.php";
?>