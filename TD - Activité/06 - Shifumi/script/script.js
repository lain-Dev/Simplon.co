
var choixUser, choixRobot, compteurUser, computeurOrdi, count, reset;
compteurOrdi = 0;
compteurUser = 0;
count = 0;

//Recharger la page
function reload(){
location.reload();
};




// Led functions
function redLedUser1() {
    document.getElementById("led1").style.backgroundColor = "red";
        document.getElementById("led2").style.backgroundColor = "white";
        document.getElementById("led3").style.backgroundColor = "white";
}
function redLedUser2() {
    document.getElementById("led2").style.backgroundColor = "red";
}
function redLedUser3() {
    document.getElementById("led3").style.backgroundColor = "red";
}

function greenLedUser1() {
    document.getElementById("led1").style.backgroundColor = "green";
    document.getElementById("led2").style.backgroundColor = "white";
        document.getElementById("led3").style.backgroundColor = "white";
}
function greenLedUser2() {
    document.getElementById("led2").style.backgroundColor = "green";
}
function greenLedUser3() {
    document.getElementById("led3").style.backgroundColor = "green";
}

function orangeLedUser1() {
    document.getElementById("led1").style.backgroundColor = "orange";
    document.getElementById("led2").style.backgroundColor = "white";
        document.getElementById("led3").style.backgroundColor = "white";
}
function orangeLedUser2() {
    document.getElementById("led2").style.backgroundColor = "orange";
}
function orangeLedUser3() {
    document.getElementById("led3").style.backgroundColor = "orange";
}

function redLedIA1() {
    document.getElementById("ledIA1").style.backgroundColor = "red";
    document.getElementById("ledIA2").style.backgroundColor = "white";
        document.getElementById("ledIA3").style.backgroundColor = "white";
}
function redLedIA2() {
    document.getElementById("ledIA2").style.backgroundColor = "red";
}
function redLedIA3() {
    document.getElementById("ledIA3").style.backgroundColor = "red";
}

function greenLedIA1() {
    document.getElementById("ledIA1").style.backgroundColor = "green";
    document.getElementById("ledIA2").style.backgroundColor = "white";
        document.getElementById("ledIA3").style.backgroundColor = "white";
}
function greenLedIA2() {
    document.getElementById("ledIA2").style.backgroundColor = "green";
}
function greenLedIA3() {
    document.getElementById("ledIA3").style.backgroundColor = "green";
}


function orangeLedIA1() {
    document.getElementById("ledIA1").style.backgroundColor = "orange";
    document.getElementById("ledIA2").style.backgroundColor = "white";
        document.getElementById("ledIA3").style.backgroundColor = "white";
}
function orangeLedIA2() {
    document.getElementById("ledIA2").style.backgroundColor = "orange";
}
function orangeLedIA3() {
    document.getElementById("ledIA3").style.backgroundColor = "orange";
}


function getPseudo() {
    pseudo = prompt("Quel est ton nom ?")
    document.getElementById("pseudo").innerText = pseudo;
}



function pierre() { 
    document.getElementById('img-gamer').src='image/pierre.png';
    choixUser = "pierre";
    document.getElementById('gif').src='image/gif4.gif';
        document.getElementById('gif1').src='image/gif4.gif';
    robot();
    resultat();
}

function feuille() { 
    document.getElementById('img-gamer').src='image/feuille.png';
    choixUser = "feuille";
    document.getElementById('gif').src='image/gif4.gif';
        document.getElementById('gif1').src='image/gif4.gif';
    robot();
    resultat();
}

function ciseaux() { 
    document.getElementById('img-gamer').src='image/ciseaux.png';
    choixUser = "ciseaux";
    document.getElementById('gif').src='image/gif4.gif';
        document.getElementById('gif1').src='image/gif4.gif';
    robot();
    resultat();
}


function robot() {
  
    randomNumber = Math.round(Math.random() * 3);
    console.log(randomNumber);
    if(randomNumber == 0){
        document.getElementById('img-robot').src='image/pierre.png';
        choixRobot = 'pierre';
    }else if(randomNumber == 1){
        document.getElementById('img-robot').src='image/feuille.png'
        choixRobot = 'feuille';
    }else if(randomNumber == 2){
        document.getElementById('img-robot').src='image/ciseaux.png';
        choixRobot = 'ciseaux';
      }
  }


  

function resultat() {

    document.getElementById("round").innerText = count + 1;

    if (choixUser == 'pierre' && choixRobot == 'ciseaux' || choixUser == 'feuille' && choixRobot == 'pierre' || choixUser == 'ciseaux' && choixRobot == 'feuille') {
        compteurUser = compteurUser + 1;
        document.getElementById("test1").style.borderColor = 'green';
        document.getElementById("test2").style.borderColor = 'red';
        if (count == 0) {
            greenLedUser1();
            redLedIA1();
        } else if (count == 1) {
            greenLedUser2();
            redLedIA2();
        } else {
            greenLedUser3();
            redLedIA3();
        }
    }else if (choixUser == 'pierre' && choixRobot == 'feuille' || choixUser == 'feuille' && choixRobot == 'ciseaux' || choixUser == 'ciseaux' && choixRobot == 'pierre') {
        compteurOrdi = compteurOrdi + 1;
        document.getElementById("test1").style.borderColor = 'red';
        document.getElementById("test2").style.borderColor = 'green';
        if (count == 0) {
            redLedUser1();
            greenLedIA1();
        } else if (count == 1) {
            redLedUser2();
            greenLedIA2();
        } else {
            redLedUser3();
            greenLedIA3();
        }
      }else if (choixRobot == choixUser) {
        document.getElementById("test1").style.borderColor = 'orange';
        document.getElementById("test2").style.borderColor = 'orange';
        compteurUser = compteurUser +1
        compteurOrdi = compteurOrdi +1
        if (count == 0) {
            orangeLedUser1();
            orangeLedIA1();
        } else if (count == 1) {
            orangeLedUser2();
            orangeLedIA2();
        } else {
            orangeLedUser3();
            orangeLedIA3();
        }
    }


      count = count + 1

      
      if (compteurOrdi > compteurUser && count == 3) {
        document.getElementById('gif').src='image/gameOver1.gif';
        document.getElementById('gif1').src='image/gameOver1.gif';
    } else if (compteurOrdi == compteurUser && count == 3) {
        document.getElementById('gif').src='image/egality1.gif';
        document.getElementById('gif1').src='image/egality1.gif';
    } else if (compteurOrdi < compteurUser && count == 3) {
        document.getElementById('gif').src='image/winner1.gif';
        document.getElementById('gif1').src='image/winner1.gif';
    }
    if (count == 3) {
        compteurOrdi = 0;
        compteurUser = 0;
        count = 0;
    }
}




