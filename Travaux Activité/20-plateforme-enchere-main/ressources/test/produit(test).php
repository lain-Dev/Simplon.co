<?php 




function create_tab()
{
    $tab_provi = array('nom' => $_POST['nom_produit'], 'description' =>$_POST['description'], 'image' => $_POST['image'],'prix_initial' => $_POST['prix_initial'],
    'aug_prix'=>$_POST['augmentation_prix'], 'aug_duree' => $_POST['augmentation_duree'], 'prix_clic' => $_POST['prix_clic']
);


//Je retourne le tableau provisoire pour pouvoir le stocker dans le tableau principal


return $tab_provi;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['form']))
{
   
  array_push($_SESSION['tab_produit'],create_tab());
    
}




function create_html($i)
{
    if (count($_SESSION['tab_produit']) > $i)
    {
   
    
    echo '<div class="col h-100 d-flex justify-content-center my-5">
              <div class="card" style="width: 18rem;">
                <h5 class="card-title text-center py-2 border-bottom">'.$_SESSION['tab_produit'][$i]['nom'].'</h5>'.
                '<div class="description border-bottom">
                  <p class="descriptionDuProduit text-center">'.$_SESSION['tab_produit'][$i]['description'].'</p>

                </div>
                <img src="ressources/img/'.$_SESSION['tab_produit'][$i]['image'].'" class="card-img-top border-bottom" alt="...">
                <div class="card-body d-flex align-items-center">
                  <p class="card-text">
                    Prix du clic: <i class="infoPrix pl-5">50cts/clic</i><br>
                    Prix de l\'enchère: <i class="infoPrix">  '.$_SESSION['tab_produit'][$i]['aug_prix'].'cts/clics</i>
                  </p>
                </div>
                <div class="card-footer d-flex flex-column justify-content-around">
                  <h6>Durée:
                    <div class="float-right pr-5 font-weight-bold"> 00:15:60</div>
                  </h6>

                  <div class="d-flex align-items-center justify-content-between">
                    <div class="prix">'.$_SESSION['tab_produit'][$i]['prix_initial']. '€ </div>
                    <form method="POST">
                      <input class="btn btn-sm btn-warning float-right" type="submit" name="produit_quatre" id="produit_quatre" value="Enchérir">
                    </form>
                  </div>
                </div>
              </div>
            </div>';
        
}
else {echo '';}
}


?>
