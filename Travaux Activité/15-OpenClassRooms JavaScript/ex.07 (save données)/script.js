function send() {
    var request = new XMLHttpRequest();//créer objet AJAX
    var value = document.getElementById("value").value//récupérer valeur input champs
    var resultat = document.getElementById("result")//select id afficher résultat
    
    request.open("POST", "https://mockbin.com/request");//request post avec url définis
    request.setRequestHeader("Content-Type", "application/json");//header request
    request.send(JSON.stringify(value));

    resultat.innerHTML = postData.text.value
}
  
//Event click sur btn pour lancer function 
let btnEnvoyer = document.getElementById('btn')

btnEnvoyer.addEventListener('click', function(event) {
    send()
    event.preventDefault()//éviter action défaut 
    event.stopPropagation()
})