var inputRangeColapso = document.getElementById('inputRangeColapso');

function changeLabel() {

 document.getElementById('labelRangeColapso').innerHTML = document.getElementById('inputRangeColapso').value + '%'; //Cambia el numero que muestra el porcentaje

 if (document.getElementById('inputRangeColapso').value < 33) { // Si es menor que 33 cambia los 3 iconos (uno a color dos negros)
   document.getElementById('buttonLeve').style.color = "green";
   document.getElementById('buttonModerado').style.color = "black";
   document.getElementById('buttonSevero').style.color = "black";
 }
 if (document.getElementById('inputRangeColapso').value > 33) {
   document.getElementById('buttonLeve').style.color = "black";
   document.getElementById('buttonModerado').style.color = "yellow";
   document.getElementById('buttonSevero').style.color = "black";
 }
 if (document.getElementById('inputRangeColapso').value > 66){
   document.getElementById('buttonLeve').style.color = "black";
   document.getElementById('buttonModerado').style.color = "black";
   document.getElementById('buttonSevero').style.color = "red";
 }
 return a = document.getElementById('inputRangeColapso');
}

var inputRangeInclinacion = document.getElementById('inputRangeInclinacion');

function changeLabela() {
 document.getElementById('labelRangeInclinacion').innerHTML = document.getElementById('inputRangeInclinacion').value + '%'; //Cambia el numero que muestra el porcentaje


 if (document.getElementById('inputRangeInclinacion').value < 33) { // Si es menor que 33 cambia los 3 iconos (uno a color dos negros)
   document.getElementById('buttonLeveI').style.color = "green";
   document.getElementById('buttonModeradoI').style.color = "black";
   document.getElementById('buttonSeveroI').style.color = "black";
 }
 if (document.getElementById('inputRangeInclinacion').value > 33) {
   document.getElementById('buttonLeveI').style.color = "black";
   document.getElementById('buttonModeradoI').style.color = "yellow";
   document.getElementById('buttonSeveroI').style.color = "black";
 }
 if (document.getElementById('inputRangeInclinacion').value > 66){
   document.getElementById('buttonLeveI').style.color = "black";
   document.getElementById('buttonModeradoI').style.color = "black";
   document.getElementById('buttonSeveroI').style.color = "red";
 }
}


var inputRangeDanos = document.getElementById('inputRangeDanos');

function changeLabelb() {
 document.getElementById('labelRangeDanos').innerHTML = document.getElementById('inputRangeDanos').value + '%'; //Cambia el numero que muestra el porcentaje


 if (document.getElementById('inputRangeDanos').value < 33) { // Si es menor que 33 cambia los 3 iconos (uno a color dos negros)
   document.getElementById('buttonLeveD').style.color = "green";
   document.getElementById('buttonModeradoD').style.color = "black";
   document.getElementById('buttonSeveroD').style.color = "black";
 }
 if (document.getElementById('inputRangeDanos').value > 33) {
   document.getElementById('buttonLeveD').style.color = "black";
   document.getElementById('buttonModeradoD').style.color = "yellow";
   document.getElementById('buttonSeveroD').style.color = "black";
 }
 if (document.getElementById('inputRangeDanos').value > 66){
   document.getElementById('buttonLeveD').style.color = "black";
   document.getElementById('buttonModeradoD').style.color = "black";
   document.getElementById('buttonSeveroD').style.color = "red";
 }
}



var inputRangeCaida = document.getElementById('inputRangeCaida');

function changeLabelc() {
 document.getElementById('labelRangeCaida').innerHTML = document.getElementById('inputRangeCaida').value + '%'; //Cambia el numero que muestra el porcentaje


 if (document.getElementById('inputRangeCaida').value < 33) { // Si es menor que 33 cambia los 3 iconos (uno a color dos negros)
   document.getElementById('buttonLeveC').style.color = "green";
   document.getElementById('buttonModeradoC').style.color = "black";
   document.getElementById('buttonSeveroC').style.color = "black";
 }
 if (document.getElementById('inputRangeCaida').value > 33) {
   document.getElementById('buttonLeveC').style.color = "black";
   document.getElementById('buttonModeradoC').style.color = "yellow";
   document.getElementById('buttonSeveroC').style.color = "black";
 }
 if (document.getElementById('inputRangeCaida').value > 66){
   document.getElementById('buttonLeveC').style.color = "black";
   document.getElementById('buttonModeradoC').style.color = "black";
   document.getElementById('buttonSeveroC').style.color = "red";
 }
}


var inputRangeMovimiento = document.getElementById('inputRangeMovimiento');

function changeLabeld() {
 document.getElementById('labelRangeMovimiento').innerHTML = document.getElementById('inputRangeMovimiento').value + '%'; //Cambia el numero que muestra el porcentaje


 if (document.getElementById('inputRangeMovimiento').value < 33) { // Si es menor que 33 cambia los 3 iconos (uno a color dos negros)
   document.getElementById('buttonLeveM').style.color = "green";
   document.getElementById('buttonModeradoM').style.color = "black";
   document.getElementById('buttonSeveroM').style.color = "black";
 }
 if (document.getElementById('inputRangeMovimiento').value > 33) {
   document.getElementById('buttonLeveM').style.color = "black";
   document.getElementById('buttonModeradoM').style.color = "yellow";
   document.getElementById('buttonSeveroM').style.color = "black";
 }
 if (document.getElementById('inputRangeMovimiento').value > 66){
   document.getElementById('buttonLeveM').style.color = "black";
   document.getElementById('buttonModeradoM').style.color = "black";
   document.getElementById('buttonSeveroM').style.color = "red";
 }
}
