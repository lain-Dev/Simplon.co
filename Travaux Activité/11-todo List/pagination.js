//faut trouver comment recupérer les valeurs de id myUl pour convertir en Array
//var listTodo = [document.getElementById("myUl").childNodes]
var listTodo = [];

let numberOfitems = 4;
let first = 0;
let actualPage = 1;
let maxPage= Math.ceil(listTodo.length / numberOfitems);

showList();

function firstPage() {
    first=0;
    actualPage = 1;
    showList();
}

function nextPage() {
    if(first+numberOfitems<=listTodo.length) {
        first+=numberOfitems;
        actualPage++;
        showList();
    }
}

function previous() {
    if(first-numberOfitems>=0) {
        first-=numberOfitems;
        actualPage--;
        showList();
    }
}

function lastPage() {
    first= (maxPage * numberOfitems) - numberOfitems;
    actualPage = maxPage;
    showList();
}


function showList() {
    let tbaleList = '';
    for(let i = first; i < first + numberOfitems; i++){
        if(i < listTodo.length){
            tbaleList+=`
                <ul>
                    <li>${listTodo[i]}</li>
                </ul>
            `
        }
    }

    document.getElementById('myUl').innerHTML = tbaleList;
    showpageInfo();
}

function showpageInfo() {
    document.getElementById('pageInfo').innerHTML = `
        page ${actualPage} / ${maxPage}
    `
}

//tableau_liste.push({tache: $('.text_input').val() });