
// JavaScript function to hide/show the navbar on scroll
let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.querySelector("header").style.top = "0";
    } else {
        document.querySelector("header").style.top = "-75px"; // Adjust the height of the navbar as needed
    }
    prevScrollpos = currentScrollPos;
}

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




  
  
  
  