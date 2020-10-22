let nameEnter = document.getElementById('name')
let nameUser = document.getElementById('res-name')

nameEnter.addEventListener('change', function(event) {
    nameUser.innerHTML = event.target.value
})

let selectGenre = document.getElementById('gender')
let selectEnter = document.getElementById('res-gender')

selectGenre.addEventListener('change', function(event) {
    selectEnter.innerHTML = event.target.value
})

let windows = document.getElementById('result')
let x = document.getElementById('mouse-x')
let y = document.getElementById('mouse-y')

windows.addEventListener('mousemove', function(event) {
    x.innerHTML = event.offsetX
    y.innerHTML = event.offsetY
})