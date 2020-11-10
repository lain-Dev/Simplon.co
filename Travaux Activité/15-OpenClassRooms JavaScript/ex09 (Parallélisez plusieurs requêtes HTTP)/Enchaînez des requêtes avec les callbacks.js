var GETRequestCount = 0;
var GETRequestResults = [];

function onGETRequestDone(err, result) {
    if (err) throw err;
    
    GETRequestCount++;
    GETRequestResults.push(result);
    
    if (GETRequestCount == 2) {
        post(url3, function(err, result) {
            if (err) throw err;
            
            // We are done here !
        });
    }
}

get(url1, onGETRequestDone);
get(url2, onGETRequestDone);

/*Comme vous pouvez le voir, le code est assez particulier à lire. Il y a d'autres façons d'écrire ce code, mais ça reste une des façons les plus simples et rapides à écrire.

Afin d'exécuter 2 requêtes  GET  en même temps, nous pouvons appeler 2 fois la fonction  get(). Étant donné que cette fonction est asynchrone, elle ne bloquera pas l'exécution du code. Ainsi l'autre fonction  get()  sera aussi appelée alors que la première ne sera pas encore terminée. C'est comme ça qu'on peut avoir 2 requêtes en parallèle.

Par contre, nous voulons exécuter une requête  POST  une fois que les 2 requêtes  GET  sont terminées, et pas avant ! Pour ce faire, nous devons savoir si les requêtes  GET  sont terminées. C'est pour ça que la variable  GETRequestCount  est créée. On va l'incrémenter dans la fonction callback que l'on a envoyée aux appels à  get() , et si on atteint 2 (le nombre de requêtes  GET qu'on a faites), alors on va exécuter la requête  POST .

GETRequestResults  sert à conserver les réponses des requêtes  GET , car on ne les a pas toutes les 2 en même temps. */