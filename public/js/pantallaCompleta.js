// pantallaCompleta.js
function pantallaCompleta(elem) {
  //Si el navegador es Mozilla Firefox
  if(elem.mozRequestFullScreen) {
    elem.mozRequestFullScreen();
  }
  //Si el navegador es Google Chrome
  else if(elem.webkitRequestFullScreen) {
    elem.webkitRequestFullScreen();
  }
  //Si el navegador es otro
  else if(elem.requestFullScreen) { 
    elem.requestFullScreen(); 
  }
}

function pantallaNormal() {
  //Mozilla Firefox
  if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  }
  //Google Chrome
  else if(document.webkitCancelFullScreen) {
    document.webkitCancelFullScreen();
  }
  //Otro
  else if(document.cancelFullScreen) { 
    document.cancelFullScreen(); 
  }
}