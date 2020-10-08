window.onload = function() {


let tab1 = [4, 8, 7, 9, 1, 5, 4, 6];
let tab2 = [7, 6, 5, 2, 1, 3, 7, 4];
let totalTab = [];

function total(x,y) {

    while (totalTab.length < x.length) {
        for(let i = 0; i < x.length; i++) {
            totalTab.push(x[i] + y[i]);
        }
    }
}

total(tab1, tab2);
console.log(totalTab);

function insertTab() {
    for(let i = 0; i < totalTab.length; i++){
        let tabTd = document.createElement('td');
        tabTd.innerText = totalTab[i];
        console.log(totalTab[i]);
        console.log(tabTd);
        document.getElementById('tab3').appendChild(tabTd);
    }
    
}

insertTab();

}