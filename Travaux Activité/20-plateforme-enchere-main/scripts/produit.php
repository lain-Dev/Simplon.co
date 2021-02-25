<?php
//création de la fonction permettant la création d'une nouvelle carte

function create_tab()
//Création d'un tableau (clé/valeur) contenant les différentes valeurs des inputs de la section ajout_produit, dont la clé sera ensuite reportée dans la fonction create_html
{
    $tab_provi = array(
        'nom2' => $_POST['nom_produit2'], 'description2' => $_POST['description2'], 'image2' => $_POST['image2'], 'prix_initial2' => $_POST['prix_initial2'],
        'aug_prix2' => $_POST['augmentation_prix2'], 'aug_duree2' => $_POST['augmentation_duree2'], 'prix_clic2' => $_POST['prix_clic2'], 'heure_ini' => date('h'), 'min_ini' => date('i'),
        'sec_ini' => date('s')
    );


    //Je retourne le tableau pour pouvoir le stocker dans la session "tab_produits2"


    return $tab_provi;
}
// Verification du type de requête en PHP (ici POST), si la requête est définie et non nulle (isset)
// via le button d'envoi de la fiche ajout_produit
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['form2'])) {

    array_push($_SESSION['tab_produit2'], create_tab());
}

?>

<?php

function create_html($nb_produit, $ind_div)
{
    if (count($_SESSION['tab_produit2']) >= $nb_produit) {
        $tab_div = array_chunk($_SESSION['tab_produit2'], 6, true);
        foreach ($tab_div[$ind_div] as $key => $value) {
?>

            <div class="col d-flex justify-content-center my-5">
                <div class="card" style="width: 18rem;">
                    <h5 class="card-title text-center py-2 border-bottom"><?php echo $value['nom2']; ?></h5>
                    <div class="prix text-center text-danger"><?php echo $value['prix_initial2']; ?> €
                    </div>
                    <img src="ressources/img/<?php echo $value['image2'] ?>" class="card-img-top border-bottom" alt="...">
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
                            <div class="float-right font-weight-bold" id="<?php echo 'duree_' . $key ?>"><?php
                                                                                                        $sec = (60 - date('s'));
                                                                                                        if ($sec < 10) {
                                                                                                            $txt_sec = '0' . $sec;
                                                                                                        } else $txt_sec = $sec;
                                                                                                        if (($value['min_ini'] + 30) - date('i') != 0) {
                                                                                                            echo ($value['min_ini'] + 30) - date('i') . ':' . $txt_sec;
                                                                                                        }
                                                                                                        ?>
                            </div>
                        </h6>

                        <div class="d-flex align-items-center justify-content-center">

                            <form method="POST">
                                <input class="btn btn-lg btn-warning float-right" type="submit" name="<?php echo $key ?>" id="<?php echo $key ?>" value="ACHETER">
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>
        <?php

        }
    }
}
        ?>

        <?php
        //Fonction pour modifier une carte d'enchère déjà créée 
        function update()
        {

            if (isset($_POST['delete']) and $_SERVER['REQUEST_METHOD'] === "POST") {
                $j = $_POST['id_produit'];
                array_push($_SESSION['tab_histo'], $_SESSION['tab_produit2'][$j]);
                unset($_SESSION['tab_produit2'][$j]);
                $_SESSION['tab_produit2'] = array_values($_SESSION['tab_produit2']);
            }

            //Pour activer une carte et la mettre dans le tableau des cartes activées
            if (isset($_POST['activate']) and $_SERVER['REQUEST_METHOD'] === "POST") {
                $d = $_POST['disabled_id'];
                array_push($_SESSION['tab_produit2'], $_SESSION['tab_histo'][$d]);
                unset($_SESSION['tab_histo'][$d]);
                $_SESSION['tab_histo'] = array_values($_SESSION['tab_histo']);
            }

            if (isset($_POST['form_modif']) and $_SERVER['REQUEST_METHOD'] === "POST") {
                $j = $_POST['id_produit'];
                $_SESSION['tab_produit2'][$j]['nom2'] = $_POST['nom_modif'];
                $_SESSION['tab_produit2'][$j]['description2'] = $_POST['description_modif'];
                $_SESSION['tab_produit2'][$j]['aug_prix2'] = $_POST['augmentation_prix_modif'];
                $_SESSION['tab_produit2'][$j]['image2'] = $_POST['image_modif'];
                $_SESSION['tab_produit2'][$j]['prix_initial2'] = $_POST['prix_initial_modif'];
                $_SESSION['tab_produit2'][$j]['prix_clic2'] = $_POST['prix_clic_modif'];
                $_SESSION['tab_produit2'][$j]['aug_duree2'] = $_POST['augmentation_duree_modif'];
            }
        }

        ?>