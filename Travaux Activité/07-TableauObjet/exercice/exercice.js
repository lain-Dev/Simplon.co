const comptes  = [
    {
        nom : "compte courant",
        solde : 600
    },
    {
        nom : "livret A",
        solde : 500
    },
    {
        nom : "PEL",
        solde : 4000
    },
    {
        nom : "LDD",
        solde : 2500
    }
];

//Exercice 01: écrire Algo afficher plus gros montant parmis les comptes dont le résultat attendu 4000 !

let max = 0; //créer une variable pour stocker en mémoire

for (let compte of comptes) { // crée un variable compte
    if(compte.solde > max) {  // si le solde compte est supérieur a max
        max = compte.solde    //donc max égale la valeur compte solde
    }                         //il garde la valeur la plus haute
}

console.log("le plus gros solde vaut " + max);


//Exercice 2: créer une autre personne comptes suivant: Compte courant: 800 et livret A: 1200. stocker dans varialble "comptes2" et connaitre la valeur Max de chaque personne. pour ne pas répéter il faut créer une focntion:

function getMaxsolde (comptes) {
    let max = 0; 

    for (let compte of comptes) { 
        if(compte.solde > max) {  
            max = compte.solde   
        }                        
    }
    return max;
}

//compte 01
const result = getMaxsolde([
    {
        nom : "compte courant",
        solde : 600
    },
    {
        nom : "livret A",
        solde : 500
    },
    {
        nom : "PEL",
        solde : 4000
    },
    {
        nom : "LDD",
        solde : 2500
    }
]);

console.log("Compte 01 le solde le plus haut " + result);

//compte 02
const result2 = getMaxsolde([
    {
        nom : "compte courant",
        solde : 800
    },
    {
        nom : "livret A",
        solde : 1200
    },
]);

console.log("Compte 02 le solde le plus haut " + result2)


//avec la fonction on rajoute au compte pour voir le plus haut solde
