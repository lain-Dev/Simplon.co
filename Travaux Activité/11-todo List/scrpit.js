
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


//insérer item dans la liste

function newElement() {
    console.log(document.getElementById("myUl"));
    var li = document.createElement("li");
    var inputValue = document.getElementById("myInput").value;
    li.innerHTML = inputValue;

    if (inputValue === '') {
      alert("entrer une tâche !");
    } else {
      document.getElementById("myUl").appendChild(li);
    }
    document.getElementById("myInput").value = "";
    console.log(document.getElementById("myUl"));
    
}    

// $('#formulaire').on('click', 'button', function () {
//     $('#myUl').append(`
//         <li>tesssssst</li>
//     `);
// })

