<?php
//Si la méthode pour accéder à la page est "POST", lorsqu'il y a une requête "POST" pour l'un des produits (aka que quelqu'un à cliquer sur le bouton "acheter") le prix du produit augmente de 0.02.
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_un'])) {

        $_SESSION['produit_un'] += 0.02;
}


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_deux'])) {

        $_SESSION['produit_deux'] += 0.02;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_trois'])) {

        $_SESSION['produit_trois'] += 0.02;
}


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_quatre'])) {
        $_SESSION['produit_quatre'] += 0.02;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_cinq'])) {

        $_SESSION['produit_cinq'] += 0.02;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_six'])) {

        $_SESSION['produit_six'] += 0.02;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_sept'])) {

        $_SESSION['produit_sept'] += 0.02;
}


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_huit'])) {

        $_SESSION['produit_huit'] += 0.02;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_neuf'])) {

        $_SESSION['produit_neuf'] += 0.02;
}


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_dix'])) {
        $_SESSION['produit_dix'] += 0.02;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_onze'])) {

        $_SESSION['produit_onze'] += 0.02;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_douze'])) {

        $_SESSION['produit_douze'] += 0.02;
}


for ($x = 0; $x < count($_SESSION['tab_produit2']); $x++) {
        if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST[$x])) {
                $_SESSION['tab_produit2'][$x]['prix_initial2'] += $_SESSION['tab_produit2'][$x]['aug_prix2'] * 0.01;
                $_SESSION['tab_produit2'][$x]['min_ini']++;
        }
}
