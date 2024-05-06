document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartList = document.querySelector('.cart-list');
    const cartTotal = document.getElementById('cart-total');
    const openCartBtn = document.getElementById('openCartBtn');
    const closeCartBtn = document.getElementById('closeCartBtn');
    const clearCartBtn = document.querySelector('.clear-cart');
    const checkoutBtn = document.querySelector('.checkout');
    const cartSidebar = document.getElementById('cartSidebar');
    const receiptContent = document.getElementById('receiptContent');
    const checkoutForm = document.getElementById('checkoutForm');

    let cartItems = [];

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            const price = parseFloat(button.getAttribute('data-price'));
            const name = button.parentElement.querySelector('.card-title').textContent;
            const item = {
                name: name,
                price: price
            };

            cartItems.push(item);
            updateCart();
            generateReceipt();
        });
    });

    function updateCart() {
        cartList.innerHTML = '';
        let total = 0;

        cartItems.forEach(item => {
            const listItem = document.createElement('li');
            listItem.classList.add('list-group-item');
            listItem.textContent = `${item.name} - ₱${item.price}`;
            cartList.appendChild(listItem);
            total += item.price;
        });

        cartTotal.textContent = total.toFixed(2);
    }

    openCartBtn.addEventListener('click', function () {
        cartSidebar.classList.add('show');
    });

    closeCartBtn.addEventListener('click', function () {
        cartSidebar.classList.remove('show');
    });

    clearCartBtn.addEventListener('click', function () {
        cartItems = [];
        updateCart();
        generateReceipt();
    });

    checkoutBtn.addEventListener('click', function () {
        const totalPrice = parseFloat(cartTotal.textContent);
        if (totalPrice === 0) {
            alert('Your cart is empty. Please add some items before checkout.');
        } else {
            generateReceipt();
            // Display checkout modal
            $('#checkoutModal').modal('show');
        }
    });

    // Function to generate receipt content
    function generateReceipt() {
        const customerName = document.getElementById('name').value;
        document.getElementById('customerName').textContent = customerName;

        const receiptProductList = document.getElementById('receiptProductList');
        receiptProductList.innerHTML = '';

        let totalPrice = 0;

        cartItems.forEach(item => {
            const receiptItem = document.createElement('li');
            receiptItem.classList.add('list-group-item');
            receiptItem.textContent = `${item.name} - ₱${item.price}`;
            receiptProductList.appendChild(receiptItem);
            totalPrice += item.price;
        });

        document.getElementById('totalPrice').textContent = `₱${totalPrice.toFixed(2)}`;
    }


    checkoutForm.addEventListener('submit', function (event) {
        event.preventDefault();

        // You can customize this part to send the form data to your server for processing

        const formData = new FormData(checkoutForm);
        const name = formData.get('name');
        const email = formData.get('email');
        const address = formData.get('address');

        // Example: Sending data via fetch API
        // fetch('/checkout', {
        //     method: 'POST',
        //     body: formData
        // }).then(response => {
        //     if (response.ok) {
        //         // Handle successful response
        //     } else {
        //         // Handle error response
        //     }
        // });

        // Display receipt modal and generate receipt
        $('#checkoutModal').modal('hide'); // Hide checkout modal
        $('#receiptModal').modal('show'); // Show receipt modal
        generateReceipt(); // Generate receipt content
    });
});




// Function to show only products with the selected category
function filterProducts(category) {
    const productCards = document.querySelectorAll('#myProducts');
    productCards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');
        if (category === 'all' || cardCategory === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Event listener for category links
const categoryLinks = document.querySelectorAll('.category-link');
categoryLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const category = link.getAttribute('data-category');
        filterProducts(category);
    });
});

// JavaScript function to hide/show the navbar on scroll
let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.querySelector("nav").style.top = "0";
    } else {
        document.querySelector("nav").style.top = "-90px"; // Adjust the height of the navbar as needed
    }
    prevScrollpos = currentScrollPos;
}


const toggleMenu = document.querySelector('.toggle-menu');
const navLinks = document.querySelector('nav ul');

toggleMenu.addEventListener('click', function() {
    navLinks.classList.toggle('show');
});