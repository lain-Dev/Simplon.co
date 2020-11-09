//Lorsque l'on récupère une  Promise , on peut utiliser sa fonction  then()  pour exécuter du code dès que la promesse est résolue, et sa fonction  catch()  pour exécuter du code dès qu'une erreur est survenue.

functionThatReturnsAPromise()
    .then(function(data) {
        // Do somthing with data 
    })
    .catch(function(err) {
        // Do something with error
    });

//Dans l'exemple ci-dessus, la fonction  functionThatReturnsAPromise  nous renvoie une  Promise . On peut donc utiliser sa fonction  then()  en lui passant une fonction qui sera exécutée dès qu'un résultat sera reçu (avec le résultat en question passé à notre fonction). On peut aussi utiliser sa fonction  catch()  en lui passant une fonction qui sera exécutée si une erreur est survenue (avec l'erreur en question passée à notre fonction).


/*Le gros avantage est que l'on peut aussi chaîner les  Promises. Ainsi, la valeur que l'on retourne dans la fonction que l'on passe à  then()  est transformée en une nouvelle  Promise  résolue, que l'on peut utiliser avec une nouvelle fonction  then() . Si notre fonction retourne par contre une exception, alors une nouvelle  Promise  rejetée est créée et on peut l'intercepter avec la fonction  catch() . Mais si la fonction que l'on a passée à  catch()  retourne une nouvelle valeur, alors on a à nouveau une  Promise  résolue que l'on peut utiliser avec une fonction  then() , etc.

Voici un exemple qui vous montre comment on peut profiter des  Promise  pour chaîner notre code asynchrone : */

returnAPromiseWithNumber2()
    .then(function(data) { // Data is 2
        return data + 1;
    })
    .then(function(data) { // Data is 3
        throw new Error('error');
    })
    .then(function(data) {
        // Not executed  
    })
    .catch(function(err) {
        return 5;
    })
    .then(function(data) { // Data is 5
        // Do something
    });

    