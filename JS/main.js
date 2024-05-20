
// Script for toggle menu (responsive mobile view)
const toggleMenu = document.querySelector('.toggle-menu');
const navLinks = document.querySelector('nav ul');

toggleMenu.addEventListener('click', function() {
    navLinks.classList.toggle('show');
});


// Activate carousel auto-sliding
document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = document.getElementById('productCarousel');
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 2000, // 3.5 seconds
      wrap: true
    });
  });


// Function for modal
document.addEventListener('DOMContentLoaded', function () {
  // Get the modal
  var modal = document.getElementById("modal-account");

  // Get the button that opens the modal
  var btn = document.getElementById("open-modal");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close-btn")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function () {
      modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
      modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
});


  
  
  
  