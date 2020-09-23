//Objet Littéral

let olivier = {
    nom : ["olivier", "Lebon"],
    age : 36,
    mail : "olivier@Jean-Pipe.com"
};

olivier.taille = 179;
olivier.sexe = "homme";

document.getElementById("nom").innerHTML = "Joueur : " + olivier["nom"];
document.getElementById("age").innerHTML = "Age : " + olivier['age'];
document.getElementById('mail').innerHTML = "Adresse mail : " + olivier['mail'];


let newP = document.createElement('p'); //argument HTML que l'on souhaite céer
newP.textContent = "Taille : " + olivier.taille + " cm";// créer noeud élément insérer texte
let b = document.getElementById("mail");
b.append(newP)//append ajout dernier element enfant


let newP2 = document.createElement('p');
newP2.textContent = "sexe : " + olivier.sexe;
b.prepend(newP2);//prepend ajout au premier element




// Constructeur d'objet
//Notez que lorsqu’on définit un constructeur, on utilise par convention une majuscule au début du nom de la fonction afin de bien discerner nos constructeurs des fonctions classiques dans un script !!


function Utilisateur(n, a, m){
    this.nom = n;
    this.age = a;
    this.mail = m;
}

let jeanPipe = new Utilisateur(["Jean", "Pipe"], 28, "Jean-Pipe@lesDoux.com")

document.getElementById("nom2").innerHTML = "Nom : " + jeanPipe['nom'][1];
document.getElementById("nomComplet").innerHTML = "Nom Complet : " + jeanPipe['nom'];
document.getElementById('age2').innerHTML = "Age : " + jeanPipe['age'] + ' ans';
document.getElementById('mail2').innerHTML = "mail : " + jeanPipe['mail'];



