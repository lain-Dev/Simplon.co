
//insérer la date

function setDate() {

var date = new Date();
var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;
document.getElementById('myDate').value = today;
} 

//reset page
function reset() {
    location.reload();
}

//funtion supprimer tache
function removeItem() {
  var liste=document.getElementById("myUl").getElementsByTagName("li");
 
for(li in liste){
	liste[li].onclick=function(){
    this.parentNode.removeChild(this)
  }
  }
}

//insérer item dans la liste

function newElement() {
    //crée une balise et donne la classe étoile
    var iconStar = document.createElement('i');
    iconStar.classList ='fas fa-star';

    //récupère la valeur de la section et rajoute la classe en plus pour attribuer une couleur a étoile
    var selectColor = document.getElementById("star").value;
    iconStar.classList.toggle(selectColor);

    //crée un btn del et attribu click avec la variable
    var delBtn = document.createElement('button');
    var p = document.createElement('p');
    delBtn.classList = "btn btn-danger btn-sm";
    delBtn.innerText = 'del';
    delBtn.addEventListener('click', removeItem);
    
    //crée une li et rajoute la valeur input tache a faire
    var li = document.createElement("li");
    var inputValue = document.getElementById("myInput").value;
    p.innerHTML = inputValue;//si je mets li avant le texte se place en premier avant étoile

    //vérifie qu'une valeur est bien entré pour pas ajouter une tache vide
    if (inputValue === '') {
      alert("entrer une tâche !");
    } else {
      li.appendChild(iconStar);
      li.appendChild(p);
      li.appendChild(delBtn); 
      document.getElementById("myUl").appendChild(li);
    }
      
    
      //version jQuery: exemple créer ma ligne avec code html
      // $("#myUl").append(`
      // <li>
      //     <i class="fas fa-star text-info" id="star"></i>
      //     <p class="text-info">${inputValue}</p>
      //     <button class="btn btn-primary btn-sm">del</button>
      // </li>
      // `);
    

   

    
}    


// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);