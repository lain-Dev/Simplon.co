async function getNumber1() {
    return 10;
}
  
async function getNumber2() {
    return 4;
}

async function compute() {
    const value1 = await getNumber1();
    const value2 = await getNumber2();
    return value1 + value2;
}

result = document.getElementById("result")

compute()
    .then(function(data) {
        result.innerHTML = data;
    })
       
    
