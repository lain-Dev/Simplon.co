const parent = document.getElementById("parent")
let scoreParent = document.getElementById('parent-count')
let compteurParent = 0

parent.addEventListener('click', function() {
    scoreParent.innerHTML = ++compteurParent
    console.log('click element parent')
})

const children = document.getElementById('child')
let scoreChild = document.getElementById('child-count')
let compteurChild = 0

children.addEventListener('click', function(event) {
    scoreChild.innerHTML = ++compteurChild
    event.preventDefault()
    event.stopPropagation()
    console.log('click element enfant')
    console.log(compteurChild)
})