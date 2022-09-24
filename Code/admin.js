
// On leave color change
document.addEventListener('DOMContentLoaded', () => {
  let status = document.querySelectorAll('.user-content p');

  status.forEach(item => {
    if(item.innerHTML == 'On leave') {
      item.style.color = 'red';
    } else if(item.innerHTML == 'On duty') {
      item.style.color = 'green';
    } else {
      
    }
  })
});


// Get the modal
var modal = document.getElementById("myModal");

// // Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
function showDetails() {
  modal.style.display = "block";
}

function closeModal() {
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