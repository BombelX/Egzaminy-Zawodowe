function aktualizacja(){
    let order = document.getElementById('ksztalt').value;
    if (order == 1){
        document.getElementById('order').textContent = 'Twoje zamówienie to cukierek Cytryna';
    }
    else if(order == 2){
        document.getElementById('order').textContent = 'Twoje zamówienie to cukierek liść';
    }
    else if(order == 3){
        document.getElementById('order').textContent = 'Twoje zamówienie to cukierek Banan';
    }
    else{
        document.getElementById('order').textContent = 'Twoje zamówienie to cukierek Inny';
    }
    let r = document.getElementById('red').value;
    let g = document.getElementById('green').value;
    let b = document.getElementById('blue').value;
    console.log(r);
    console.log(g);
    console.log(b);

    document.getElementById('colu').style.backgroundColor = "rgb(" + r + ',' + g + ',' + b + ")";


    
}