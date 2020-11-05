function send() {
    var request = new XMLHttpRequest();//créer objet AJAX
    var value = document.getElementById("value").value//récupérer valeur input champs
    
    request.open("POST", "https://mockbin.com/request");//request post avec url définis
    request.setRequestHeader("Content-Type", "application/json");//header request
    request.send(JSON.stringify(value));
}
  
/*Event click sur btn pour lancer function */
let btnEnvoyer = document.getElementById('btn')

btnEnvoyer.addEventListener('click', function(event) {
    send()
    event.preventDefault()/*eviter action défaut */
    event.stopPropagation()
})