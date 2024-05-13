<?php
ob_start();
?>
<main class="border-2 border-gray-100 p-1 shadow-2xl">
    <section class='border-8 border-gray-400 m-5 p-5'>
        <section  class='flex'>
            <div>
                <img src="img/logo_societe.png" alt="Logo de la société">
            </div>
            <div class="flex justify-center items-center text-3xl mx-4">
                <h1 class="text-red-500 text-center">Back-Office - Royal<span class="text-gray-400">Tech</span></h1>
            </div>
        </section>
        <br>
        <section>
            <form action="index.php?action=login" method="POST" class="flex flex-col">
                <div id="msg"><?php if(!empty($erreurs)){ echo "Vous devez saisir tous les champs !!!";} ?></div>
                <label for="loginUtilsat" class="font-bold">Login utilisateur</label>
                <input type="text" id="loginUtilsat" name="loginUtilsat" placeholder="Entrer le login d'utilisateur" class="border p-3 m-1" value="<?php if(isset($_POST["loginUtilsat"])){ echo $_POST["loginUtilsat"] ;}
                    ?>">
                <label for="motdepasse" class="font-bold">Mot de passe</label>
                <input type="password" id="motdepasse" name="motdepasse" placeholder="Entrer le mot de passe" class="border p-3 m-1" value="<?php if(isset($_POST["motdepasse"])){ echo $_POST["motdepasse"];}
                    ?>">
                <button type="submit" class="bg-red-600 text-white p-3 m-1">LOGIN</button>
            </form>
        </section>
    </section>
</main>
<?php
$content = ob_get_clean();
include "baselayout.php";
?>