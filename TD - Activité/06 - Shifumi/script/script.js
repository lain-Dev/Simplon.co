
function quandMaPageEstCharge() {

    //Recharger la page
    function reload(){
	location.reload();
    };

    //choix nom
    let nameEnter = window.prompt('Entrer votre nom');
    console.log(nameEnter);
    document.getElementById("nomJoueur").innerText = nameEnter;

    //choix pierre, feuille, ciseaux :
    //document.getElementById('img-gamer').src='image/pierre.png';
    //document.getElementById('img-gamer').src='image/feuille.png';
    //document.getElementById('img-gamer').src='image/feuille.png';
    
    var clicSurPierre = document.getElementById('pierre');
    
    function changePierre() {
        document.getElementById('img-gamer').src='image/pierre.png';
    }

    clicSurPierre.onclick=changePierre;

    /*
    document.getElementById('feuille').onclick = function() {changeFeuille()};
    
    function changeFeuille() {
        document.getElementById('img-gamer').src='image/feuille.png';
    }
    
    document.getElementById('ciseaux').onclick = function() {changeCiseaux()};
    
    function changeCiseaux() {
        document.getElementById('img-gamer').src='image/feuille.png';
    } 
    */
}