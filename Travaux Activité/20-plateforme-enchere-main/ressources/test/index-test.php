<?php
session_start();

//Détermine en début de session si un prix existe déjà pour chaque article présent. Si ce n'est pas le cas, il fixe le prix à 50 euros. Les prix sont des variables de session et seront réinitialisées à chaque session.
if (
  !(isset($_SESSION['produit_un']))
  or !(isset($_SESSION['produit_deux']))
  or !(isset($_SESSION['produit_trois']))
  or !(isset($_SESSION['produit_quatre']))
  or !(isset($_SESSION['produit_cinq']))
  or !(isset($_SESSION['produit_six']))
  or !(isset($_SESSION['produit_sept']))
  or !(isset($_SESSION['produit_huit']))
  or !(isset($_SESSION['produit_neuf']))
  or !(isset($_SESSION['produit_dix']))
  or !(isset($_SESSION['produit_onze']))
  or !(isset($_SESSION['produit_douze']))
  or !(isset($_SESSION['produit_trois']))
  or !(isset($_SESSION['tab_produit']))
) {
  $_SESSION['produit_un'] = 50;
  $_SESSION['produit_deux'] = 50;
  $_SESSION['produit_trois'] = 50;
  $_SESSION['produit_quatre'] = 50;
  $_SESSION['produit_cinq'] = 50;
  $_SESSION['produit_six'] = 50;
  $_SESSION['produit_sept'] = 50;
  $_SESSION['produit_huit'] = 50;
  $_SESSION['produit_neuf'] = 50;
  $_SESSION['produit_dix'] = 50;
  $_SESSION['produit_onze'] = 50;
  $_SESSION['produit_douze'] = 50;
  $_SESSION['tab_produit'] = [];
}
//Execution du script permettant l'alimentation des enchères
include('scripts/alimentation.php');
include('scripts/produit.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


  <title>page enchère</title>

</head>

<body>
  <!--HEADER-->

  <header class="container-fluid d-flex justify-content-center align-items-center">
    <h1 class="col-m-4 text-center font-weight-bold">NOM DE L'APPLICATION</h1>
  </header>

  <section class="container-fluid pt-5">

    <!--CAROUSEL-->
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" data-interval="100000000">

      <ol class="carousel-indicators m-n4">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
      </ol>

      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 ">

            <!--CARD 1-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50cts/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php echo $_SESSION['produit_un'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_un" id="produit_un" value="Enchérir">
                    </form>
                    <!-- <button class="btn-sm btn-warning float-right " href="#" role="button">Enchère</button> -->
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 2-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50cts/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php /*affichage de la variable prix*/ echo $_SESSION['produit_deux'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_deux" id="produit_deux" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 3-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50cts/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php echo $_SESSION['produit_trois'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_trois" id="produit_trois" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 4-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50cts/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php echo $_SESSION['produit_quatre'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_quatre" id="produit_quatre" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 5-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50cts/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php echo $_SESSION['produit_cinq'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_cinq" id="produit_cinq" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 6-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50cts/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php echo $_SESSION['produit_six'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_six" id="produit_six" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        <!--SLIDE 2-->
        <div class="carousel-item">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 ">

            <!--CARD 1-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php echo $_SESSION['produit_sept'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_sept" id="produit_sept" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 2-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php echo $_SESSION['produit_huit'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_huit" id="produit_huit" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 3-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php echo $_SESSION['produit_neuf'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_neuf" id="produit_neuf" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 4-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php echo $_SESSION['produit_dix'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_dix" id="produit_dix" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 5-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php echo $_SESSION['produit_onze'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_onze" id="produit_onze" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 6-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix"><?php echo $_SESSION['produit_douze'] . '€' ?></div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_douze" id="produit_douze" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        <!--SLIDE 3--->
        <div class="carousel-item">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 ">

            <!--CARD 1-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix">0.00€</div>
                    <button class="btn-sm btn-warning float-right">Enchère</button>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 2-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix">0.00€</div>
                    <button class="btn-sm btn-warning float-right">Enchère</button>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 3-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <<h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                    </h6>

                    <div class="d-flex align-items-center justify-content-between">
                      <div class="prix">0.00€</div>
                      <button class="btn-sm btn-warning float-right">Enchère</button>
                    </div>
                </div>
              </div>
            </div>
            <!--CARD 4-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix">0.00€</div>
                    <button class="btn-sm btn-warning float-right">Enchère</button>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 5-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix">0.00€</div>
                    <button class="btn-sm btn-warning float-right">Enchère</button>
                  </div>
                </div>
              </div>
            </div>
            <!--CARD 6-->
            <div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">Iphone 8</h5>
                <div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">Ceci est une petite description du produit</p>

                </div>
                <img src="ressources/img/iphone.jpg" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50/clic</i><br>
                    Prix de l'enchère:<i class="infoPrix"> +2cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around bg-white">
                  <h6>Durée:
                    <img class="w-50 timer ml-5" src="ressources/img/timer.gif" alt="" srcset="">
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix">0.00€</div>
                    <button class="btn-sm btn-warning float-right">Enchère</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

         <!------------------------ Slide Ajout ----------------------------->
        <div class="carousel-item">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 ">

            <!-----------------Card 1------------------------------------->
            <?php create_html(0);?>
            <!-----------------ard 2------------------------------------->
            <?php create_html(1);?>
            <!-----------------Card 3------------------------------------->
            <?php create_html(2);?>
            <!-----------------Card 4------------------------------------->
            <?php create_html(3);?>
            <!-----------------Card 5------------------------------------->
            <?php create_html(4);?>
            <!-----------------Card 6------------------------------------->
            <?php create_html(5);?>
            
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="width: 100px;">
        <span class="carousel-control-prev-icon text-dark font-weight-bold fas fa-angle-left" aria-hidden="true">
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="width: 100px;">
        <span class="carousel-control-next-icon text-dark font-weight-bold fas fa-angle-right" aria-hidden="true">
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>

</body>

</html>