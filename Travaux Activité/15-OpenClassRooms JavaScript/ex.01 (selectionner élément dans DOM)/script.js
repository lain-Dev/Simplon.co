
// récupérer par ID
let mainContent = document.getElementById("main-content");
console.log(mainContent);

// récupérer par CLASS
let important = document.getElementsByClassName("important");
console.log(important);

//récupérer par type
let article = document.getElementsByTagName("article");
console.log(article);

// recupérer tous les éléments ciblés (mélangeant plusieurs article)
let listeArticle = document.querySelectorAll("article ul.important li")
console.log(listeArticle);
//ou
let listeArticle = document.querySelector("article ul.important li")
console.log(listeArticle.parentElement);

console.log(listeArticle.nextElementSibling);