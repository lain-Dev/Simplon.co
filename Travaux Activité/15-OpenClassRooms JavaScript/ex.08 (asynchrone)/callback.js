element.addEventListener('click', function(e) {
    // Do something here ... 
});

//Les callbacks sont la base de l'asynchrone en JavaScript et sont très utilisées.

//Les callbacks sont faciles à comprendre et à utiliser, mais elles souffrent d'un gros problème de lisibilité du code, via ce qu'on appelle le callback hell. En effet, on se retrouve régulièrement dans des situations où on va imbriquer plusieurs couches de callbacks , rendant le code difficile à lire et pouvant générer des erreurs.

elt.addEventListener('click', function(e) {
    mysql.connect(function(err) {
        mysql.query(sql, function(err, result) {
            fs.readFile(filePath, function(err, data) {
                mysql.query(sql, function(err, result) {
                    // etc ...
                });
            });
        });
    }); 
});

//Gestion des erreurs

/*Pour gérer les erreurs avec les callbacks, la méthode la plus utilisée est de prendre 2 paramètres dans notre callback. Le 2e paramètre est notre donnée et le 1er est l'erreur. Si elle n'est pas null ou undefined,  elle contiendra un message d'erreur indiquant qu'une erreur est intervenue.

Si on reprend l'exemple ci-dessus, on voit par exemple que la lecture d'un fichier avec le module  fs  peut nous retourner une erreur :*/

fs.readFile(filePath, function(err, data) {
    if (err) {
        throw err;
    }
    // Do something with data
});

