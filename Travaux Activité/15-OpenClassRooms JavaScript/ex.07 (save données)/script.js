function send() {
    let request = new XMLHttpRequest();//créer objet AJAX
    var value = document.getElementById("value").value//récupérer valeur input champs
    
    request.open("POST", "https://mockbin.com/request");//request post avec url définis
    request.setRequestHeader("Content-Type", "application/json");//header request
    request.onreadystatechange = function() {  //effectuer certaines actions en fonction de la réponse
        let result = document.querySelector('#result')

        if (request.readyState == 4 && request.status == 200) { //propriaite : 4: request finished and response is ready & status pour 200: "OK"
          let response = JSON.parse(request.responseText);
          result.textContent = response.postData.text;
        }
      }

    request.send(JSON.stringify(document.getElementById("value").value)); //transformer notre objet JavaScript en JSON

}
  
//Event click sur btn pour lancer function 
const btnEnvoyer = document.querySelector('input[type="submit"]');

btnEnvoyer.addEventListener('click', function(event) {
    event.preventDefault()//éviter action défaut 
    send()
})

