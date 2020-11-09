//async  et  await  sont 2 nouveaux mots clés qui permettent de gérer le code asynchrone de manière beaucoup plus intuitive, en bloquant l'exécution d'un code asynchrone jusqu'à ce qu'il retourne un résultat.

async function fonctionAsynchrone1() {/* code asynchrone */}
async function fonctionAsynchrone2() {/* code asynchrone */}

async function fonctionAsynchrone3() {
 const value1 = await fonctionAsynchrone1();
 const value2 = await fonctionAsynchrone2();
 return value1 + value2;
}

/*Dans cet exemple, nous avons un total de 3 fonction asynchrones :  fonctionAsynchrone1 ,  fonctionAsynchrone2 ,  fonctionAsynchrone3 . Quand on utilise  async  et  await , une fonction asynchrone doit avoir le mot clé  async  avant la fonction. Ensuite, dans le code, nous pouvons faire appel à des fonctions asynchrones et attendre leur résultat grâce au mot clé  await  que l'on met devant l'appel de la fonction.

async  /  await  utilisent les Promises en arrière-plan, il est donc possible d'utiliser les 2 en même temps. */