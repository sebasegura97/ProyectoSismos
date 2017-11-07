var buttonRojo = document.getElementById('buttonRojo');
var buttonAmarillo = document.getElementById('buttonAmarillo');
var buttonVerde = document.getElementById('buttonVerde');

function botonRojo(){
  buttonRojo.classList.add("botonRojo");
  buttonAmarillo.classList.remove("botonAmarillo");
  buttonVerde.classList.remove("botonVerde");
  document.cookie = ""
}
function botonVerde(){
  buttonRojo.classList.remove("botonRojo");
  buttonAmarillo.classList.remove("botonAmarillo");
  buttonVerde.classList.add("botonVerde");
}
function botonAmarillo(){
  buttonRojo.classList.remove("botonRojo");
  buttonAmarillo.classList.add("botonAmarillo");
  buttonVerde.classList.remove("botonVerde");
}
