
// Get the modal
var modal = document.getElementById("myModal");

// // Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

let form = document.getElementById("myForm");

// When the user clicks on the button, open the modal
function submitted(event) {
  event.preventDefault();
  modal.style.display = "block";
}

function reset() {
  let inputs = document.querySelectorAll('input');

  inputs.forEach(item => {
    item.innerHTML = "";
  })
}

function okF() {
  modal.style.display = "none";
}

function cancelF() {
  modal.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}