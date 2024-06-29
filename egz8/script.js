function hasNumber(myString) {
    return /\d/.test(myString);
  }
function checkpass() {
    const elem = document.getElementById('pass').value;
    console.log(elem.length);
    const el = document.createElement('p');
    el.textContent = 'HASŁO JEST PUSTE';
    const x = document.getElementById('right');
    x.appendChild(el)
}