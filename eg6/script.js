function changeBackgrounColor(color){
    const chng = document.getElementById('rig');
    chng.style.backgroundColor = color;
}
function fontColor(){
    const elem  = document.getElementById('font-color').value;
    console.log(elem);
    const chng = document.getElementById('rig');
    chng.style.color = elem;   
}
function fontSize(){
    const elem  = document.getElementById('font-size').value;
    console.log(elem);
    const chng = document.getElementById('rig');
    chng.style.fontSize = elem;   
}
function border(){
    const elem  = document.getElementById('isBorder').checked;
    console.log(elem);
    const chng = document.getElementById('gib');
    if (elem){
        chng.style.border = '1px solid white'; 
    }
    else{
        chng.style.border = '0px solid white';  
    }
}
function liststl(type){
    const chng = document.getElementById('lis');
    chng.style.listStyleType = type
}