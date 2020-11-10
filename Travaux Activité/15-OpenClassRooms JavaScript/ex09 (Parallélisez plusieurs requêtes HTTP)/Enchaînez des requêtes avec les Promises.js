//Grâce à la fonction   Promise.all  , voyons comment exécuter nos requêtes en parallèle et en séquence avec les  Promises .

//Pour cet exemple, nous partons du principe que nous avons accès à 2 fonctions (  get  et  post  ) qui font respectivement une requête  GET  et une requête  POST  quand on leur passe en paramètre l'URL de la requête. Ces fonctions retourneront une  Promise  avec le résultat de la requête.

Promise.all([get(url1), get(url2)])
    .then(function(results) {
    return Promise.all([results, post(url3)])
    })
    .then(function(allResults) {
        // We are done here !
    });

/*Ici, nous utilisons la fonction  Promise.all  qui prend en paramètre une liste de  Promise  (cela peut aussi être de simples valeurs qui sont alors transformées en  Promise  résolues), et qui permet de toutes les exécuter en parallèle et de retourner une nouvelle  Promise  qui sera résolue quand toutes les  Promise  seront résolues.

Ainsi, la fonction  then()  recevra les résultats de toutes les  Promise  sous forme d'un tableau.

Afin d'exécuter notre requête  POST  une fois que les requêtes  GET  sont terminées, nous l'exécutons donc dans la fonction  then().

Notez que dans la fonction  then(), nous faisons encore une fois appel à la fonction  Promise.all  en lui passant les résultats des requêtes  GET  et notre requête  POST . Étant donné que  Promise.all  considère les simples valeurs comme des  Promise  résolues, cela nous permet, dans le prochain  then() , de récupérer une liste qui contient les résultats des requêtes  GET  et le résultat de la requête  POST  : allResults = [ [ getResult1, getResult2 ], postResult ] .  */