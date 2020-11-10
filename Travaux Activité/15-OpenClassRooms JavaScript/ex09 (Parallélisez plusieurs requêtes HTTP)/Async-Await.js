async function requests() {
    var getResults = await Promise.all([get(url1), get(url2)]);
    var postResult = await post(url3);
    return [getResults, postResult];
}

requests().then(function(allResults) {
    // We are done here !
});

/*Nous utilisons aussi la fonction  Promise.all  dans ce code, car c'est comme ça que l'on peut exécuter des fonctions asynchrones en parallèle (rappelez-vous que  async  correspond en arrière-plan à une  Promise ).

Par contre, ici, nous utilisons  await  devant  Promise.all  afin d'attendre la fin de l'exécution des 2 requêtes  GET , puis nous utilisons  await  devant la requête  POST  afin d'attendre son résultat. Puis nous renvoyons un tableau avec tous les résultats.

Lorsque nous appelons la fonction  requests() , ici, nous utilisons  then()  pour récupérer tous les résultats (mais vous auriez aussi pu utiliser  await  au sein d'une autre fonction avec le mot clé  async ). */