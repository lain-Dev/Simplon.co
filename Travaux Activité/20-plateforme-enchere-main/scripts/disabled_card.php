<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <title>Historique des enchères désactivées</title>

<body>

    <h1 class="text-center" style="color:red;">Historique des enchères désactivées</h1>
    <?php
    //on démarre manuellemnent la session : voir si possible en auto(session.auto_star ?)
    session_start();

    //une boucle foreach qui recherche dans la variable session(le tableau histo), pour chaque valeur (qu'on redefini a key) dans la variable $session: affiche carte desactivé !
    foreach ($_SESSION['tab_histo'] as $key => $value) {
    ?>

        <div class="col h-100 d-flex justify-content-center my-5">
            <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom"><?php echo $value['nom2']; ?></h5>
                <div class="prix text-center text-danger"><?php echo $value['prix_initial2']; ?> € </div>
                <img src="../ressources/img/<?php echo $value['image2'] ?>" class="card-img-top border-bottom" alt="...">
                <div class="description border-bottom">
                    <p class="descriptionDuProduit text-center"><?php echo $value['description2']; ?></p>

                </div>
                <div class="card-body d-flex align-items-center">
                    <p class="card-text">
                        Prix de l'enchère:<i class="infoPrix"> +<?php echo $value['aug_prix2']; ?>cts/clics</i>
                    </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around">
                    <h6>Durée:
                        <div class="float-right font-weight-bold"> 00:15:60</div>
                    </h6>

                    <div class="d-flex align-items-center justify-content-center">

                        <form action="../index.php" method="POST">
                            <input type="hidden" name="disabled_id" id="disabled_id" value="<?php echo $key ?>">
                            <input class="btn btn-lg btn-warning float-right" type="submit" name="activate" id="activate" value="Activer">
                        </form>
                        <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                    </div>
                </div>
            </div>
        </div>


    <?php } ?>


</body>