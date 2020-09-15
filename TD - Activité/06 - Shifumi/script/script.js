
function quandMaPageEstCharge() {

    //Recharger la page
    function reload(){
	location.reload();
    };

    //choix nom
    let nameEnter = window.prompt('Entrer votre nom');
    console.log(nameEnter);
    document.getElementById("nomJoueur").innerText = nameEnter;

    //choix pierre, feuille, ciseaux
    const pierre = document.getElementById('img-gamer').src='image/pierre.png';
    const feuille = document.getElementById('img-gamer').src='image/feuille.png';
    const ciseaux = document.getElementById('img-gamer').src='image/ciseaux.png';
    
}