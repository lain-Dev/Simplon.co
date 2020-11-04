/*Envoyez des données avec une requête POST*/

var request = new XMLHttpRequest();
request.open("POST", "http://url-service-web.com/api/users");
request.setRequestHeader("Content-Type", "application/json");
request.send(JSON.stringify(jsonBody));

/*Comme vous pouvez le voir, nous avons passé le contenu à envoyer au service web à notre fonction  send() . Étant donné que l'on souhaite envoyer du JSON à notre service web, nous avons d'abord besoin de transformer notre objet JavaScript en JSON (qui, rappelons-le, est un format textuel, c'est-à-dire que c'est simplement du texte, contrairement à un objet JavaScript qui est une structure complexe du langage). Pour faire cette transformation, nous utilisons la fonction  JSON.stringify(json) . Toujours parce que l'on souhaite envoyer du JSON à notre service web, il faut le prévenir qu'il va recevoir du JSON. Cela se fait grâce à des headers, qui sont des en-têtes envoyés en même temps que la requête pour donner plus d'informations sur celle-ci. Le header en question est  Content-Type , avec la valeur  application/json . Ainsi, il faut ajouter cette ligne :  request.setRequestHeader("Content-Type", "application/json");

 PUT fonctionne exactement de la même manière que POST. */