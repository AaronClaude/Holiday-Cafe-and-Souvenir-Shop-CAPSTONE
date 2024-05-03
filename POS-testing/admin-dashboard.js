// Get the modal element
var modal = document.getElementById('admin-profile');

// Get the link that opens the modal
var openModalLink = document.getElementById('open-admin');

// Get the <span> element that closes the modal
var closeModalSpan = document.getElementsByClassName('close-btn')[0];

// When the user clicks on the link, open the modal
openModalLink.onclick = function() {
  modal.style.display = 'block';
}

// When the user clicks on <span> (x), close the modal
closeModalSpan.onclick = function() {
  modal.style.display = 'none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
}



