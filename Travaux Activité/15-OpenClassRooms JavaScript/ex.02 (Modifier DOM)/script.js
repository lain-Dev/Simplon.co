//créer un élément
const newElt = document.createElement("p")

//ajouter élément a un élément by ID
let elt = document.getElementById("main")
elt.appendChild(newElt)

//ajouter contenu HTML dans élémént créer
newElt.innerHTML = "Mon <strong>grand</strong> contenu"

//ajouter classe "important" à lélément créer
newElt.classList.add("important")

//changzr couleur texte en vert
newElt.style.color = "green"