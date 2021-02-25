<?php 
    //condition pour vérifier la session login
   if ( isset($_POST['user']) and $_POST['user'] === "admin" and isset($_POST['mdp']) and $_POST['mdp'] === "test") {
        header('Location: ajout_produit.html');
    }else {
        echo 'Permission refusée';
    }
?>