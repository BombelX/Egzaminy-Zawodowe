function art(){
    a1 = parseInt(document.getElementById("A1").value);
    r = parseInt(document.getElementById("R").value);
    n = parseInt(document.getElementById("n").value);
    let elem = document.createElement('p');
    
    
    let ciag = 'Ciąg arytmetyczny zawiera wyrazy:';
    for (let i = 0;i<n;i++ ){
        let next = a1+i*r;
        console.log(a1+i*r);
        
        ciag = ciag + " " + next;
        console.log(ciag);
    }
    elem.textContent = ciag;
    let de = document.getElementById('rig');
    de.appendChild(elem)


    

}