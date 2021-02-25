<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btn_modif'])) {
    $i =  $_POST['produit_choisi'];

?>

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


        <title>Page modification</title>

    </head>

    <body>
        <section class="container mt-5">
            <form action="../index.php" method="POST">
                <div class="form-group row">
                    <input type="hidden" name="id_produit" id="id_produit" value="<?php echo $i ?>">
                    <label for="nom_modif" class="col-md-3 col-form-label font-weight-bold">Nom du produit:</label>
                    <div class="col-md-9">
                        <input type="text" name="nom_modif" id="nom_modif" class="form-control" value="<?= $_SESSION['tab_produit2'][$i]['nom2'] ?>" pattern="[a-zA-Z0-9 ]+" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description_modif" class="col-md-3 col-form-label font-weight-bold">Description:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="description_modif" id="description_modif" value="<?= $_SESSION['tab_produit2'][$i]['description2'] ?>" pattern="[a-zA-Z0-9 é & è ç ! à ù , ; . £ * # ' ]+">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image_modif" class="col-md-3 col-form-label font-weight-bold">Image du produit</label>
                    <div class="col-md-9">
                        <input type="file" class="form-control" name="image_modif" id="image_modif" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="prix_initial_modif" class="col-md-3 col-form-label font-weight-bold">Prix initial (en €):</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="prix_initial_modif" id="prix_initial_modif" value="<?= $_SESSION['tab_produit2'][$i]['prix_initial2'] ?>" required min="1" step="0.01">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="prix_clic_modif" class="col-md-3 col-form-label font-weight-bold">Prix du clic (en cts)</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="prix_clic_modif" id="prix_clic_modif" value="<?= $_SESSION['tab_produit2'][$i]['prix_clic2'] ?>" required min="1">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="augmentation_prix_modif" class="col-md-3 col-form-label font-weight-bold">Augmentation prix enchère (en cts):</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="augmentation_prix_modif" id="augmentation_prix_modif" value="<?= $_SESSION['tab_produit2'][$i]['aug_prix2'] ?>" required min="1">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="augmentation_duree_modif" class="col-md-3 col-form-label font-weight-bold">Augmentation durée enchère (en secondes):</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" name="augmentation_duree_modif" id="augmentation_duree_modif" value="<?= $_SESSION['tab_produit2'][$i]['aug_duree2'] ?>" required min="1">
                    </div>
                </div>

                <div class="justify-content-end d-flex row">
                    <input class="btn btn-secondary mr-3 mb-5 mt-5 p-2 border-0" name="form_modif" type="submit" value="Modifier le produit">
                    <input class="btn btn-primary mr-3 mb-5 mt-5 pt-2 border-0" name="delete" type="submit" value="Supprimer l'enchère">
                </div>
            </form>
        </section>
    </body>


    </html>
<?php
}
?>