// Afficher numéro de téléphone lorsqu'on clique sur le bouton

var tel = document.getElementById("tel");
tel.addEventListener('click', function () {
    tel.innerHTML = "+262.6 99999999"
})

// Animation chiffres clés
// Trajets

var n = [800, 230, 33, 6]; // Nombre final du compteur
var cpt1 = 0; // Initialisation du compteur
var duree = 2; // Durée en seconde pendant laquel le compteur ira de 0 à 15
//var delta = Math.ceil((duree * 1000) / n); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
var node1 = document.getElementById("compteur1"); // On récupère notre noeud où sera rafraîchi la valeur du compteur


function countdownTrajet() {
    if (cpt1 < n[0]) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
        node1.innerHTML = ++cpt1 + '00';
        setTimeout(countdownTrajet, Math.ceil((duree * 1000) / n[0]));
    }
}

// Véhicules

var cpt2 = 0;
var node2 = document.getElementById("compteur2");

function countdownVehicule() {
    if (cpt2 < n[1]) {
        node2.innerHTML = ++cpt2;
        setTimeout(countdownVehicule, Math.ceil((duree * 1000) / n[1]));
    }
}

// Employés

var cpt3 = 0;
var node3 = document.getElementById("compteur3");

function countdownEmpl() {
    if (cpt3 < n[2]) {
        node3.innerHTML = ++cpt3;
        setTimeout(countdownEmpl, Math.ceil((duree * 1000) / n[2]));
    }
}

// Points de départ

var cpt4 = 0;
var node4 = document.getElementById("compteur4");

function countdownDepart() {
    if (cpt4 < n[3]) {
        node4.innerHTML = ++cpt4;
        setTimeout(countdownDepart, Math.ceil((duree * 1000) / n[3]));
    }
}
/*setTimeout(countdownTrajet, Math.ceil((duree * 1000) / n[0]));
setTimeout(countdownVehicule, Math.ceil((duree * 1000) / n[1]));
setTimeout(countdownEmpl, Math.ceil((duree * 1000) / n[2]));
setTimeout(countdownDepart, Math.ceil((duree * 1000) / n[3]));*/


var waypoint = new Waypoint({
    element: document.querySelector('section.works'),
    handler: function () {
        console.log('reached');
        setTimeout(countdownTrajet, Math.ceil((duree * 1000) / n[0]));
        setTimeout(countdownVehicule, Math.ceil((duree * 1000) / n[1]));
        setTimeout(countdownEmpl, Math.ceil((duree * 1000) / n[2]));
        setTimeout(countdownDepart, Math.ceil((duree * 1000) / n[3]));
    },
    offset: 400,
})