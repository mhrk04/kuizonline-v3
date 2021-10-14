console.log("anjai");

// fungsi besarkan huruf
var fontSize = 1;

function zoomIn() {
  fontSize += 0.1;
  document.body.style.fontSize = fontSize + "em";
}

function zoomOut() {
  fontSize -= 0.1;
  document.body.style.fontSize = fontSize + "em";
}

//Fungsi tukar warna
// document.getElementById('color').onclick = changeColor;
// var currentColor = "red";
// // tukar warna merah --> biru
// function changeColor() {
//   if (currentColor == "red") {
//     document.body.style.color = "blue";
//     currentColor = "blue";
//   } else {
//     document.body.style.color = "red";
//     currentColor = "red";
//   }
// }

// console.log('tamat script berjaya');