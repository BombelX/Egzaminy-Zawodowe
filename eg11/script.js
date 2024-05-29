let orderId = 0
let quantity  = document.getElementsByClassName('quantity');
function refresh(){
for (i=0;i<4;i+=1){
    if (parseInt(quantity[i].textContent) == 0){
        quantity[i].style.backgroundColor = 'Red'
    }
    else if (parseInt(quantity[i].textContent) <= 5){
        quantity[i].style.backgroundColor = 'yellow'
    }
    else{
        quantity[i].style.backgroundColor = 'Honeydew'
    }
}
}

refresh()

function update(id){
    let newquantity = prompt('Wpisz Nowa ilosc')
    console.log(newquantity);
    quantity[id].textContent = newquantity
    refresh()
}
function placeorder(item){
    orderId +=1
    alert("Zamówienie nr: " + orderId + " Produkt:  " + item)
}