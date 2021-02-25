<?php


session_start();

function liste_deroulante()
{
    foreach ($_SESSION['tab_produit2'] as $key => $value) {
        echo '<option value ="' . $key . '" >' . $value['nom2'] . ' </option>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Login</title>

    <link rel="stylesheet" href="../styles/style-login.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="../ressources/img/admin.jpg" id="icon" alt="User Icon" />
            </div>

            <section class="container">
                <form action="modification_form.php" method="POST">
                    <label for="produit_choisi">Choisir l'enchère à modifier :</label>
                    <br>
                    <select name="produit_choisi" id="produit_choisi" required>
                        <?php liste_deroulante() ?>
                    </select>
                    <br>
                    <input type="submit" class="btn btn-primary mt-3" name="btn_modif" id="btn_modif" value="Modifier">
                </form>

            </section>

        </div>
    </div>
</body>

</html>