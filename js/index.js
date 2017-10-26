var inputRangeColapso = document.getElementById('inputRangeColapso');

function changeLabel() {
  document.getElementById('labelRangeColapso').innerHTML = document.getElementById('inputRangeColapso').value + '%';


  if (document.getElementById('inputRangeColapso').value < 33) {
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
}
// document.getElementById('labelRangeColapso').innerHTML = 'Hola';
