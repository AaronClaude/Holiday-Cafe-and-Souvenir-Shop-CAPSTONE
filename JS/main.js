


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




  
  
  
  