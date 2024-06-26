document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartList = document.querySelector('.cart-list');
    const cartTotal = document.getElementById('cart-total');
    const openCartBtn = document.getElementById('openCartBtn');
    const closeCartBtn = document.getElementById('closeCartBtn');
    const clearCartBtn = document.querySelector('.clear-cart');
    const checkoutBtn = document.querySelector('.checkout');
    const cartSidebar = document.getElementById('cartSidebar');
    const checkoutForm = document.getElementById('checkoutForm');

    let cartItems = [];

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            const price = parseFloat(button.getAttribute('data-price'));
            const name = button.parentElement.querySelector('.card-title').textContent;

            // Check if item already exists in cart
            const existingItem = cartItems.find(item => item.name === name);
            if (existingItem) {
                // If item already exists, increase quantity instead of adding a duplicate
                existingItem.quantity++;
            } else {
                // If item does not exist, add it to cart with quantity 1
                cartItems.push({ name: name, price: price, quantity: 1 });
            }

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

            const itemDetails = document.createElement('span');
            itemDetails.classList.add('cart-item-details');
            const itemName = document.createElement('span');
            itemName.classList.add('cart-item-name');
            itemName.textContent = item.name;
            const itemPrice = document.createElement('span');
            itemPrice.classList.add('cart-item-price');
            itemPrice.textContent = ` ₱${item.price * item.quantity}`;
            itemDetails.appendChild(itemName);
            itemDetails.appendChild(itemPrice);

            const itemControls = document.createElement('div');
            itemControls.classList.add('cart-item-controls');
            const quantityInput = document.createElement('input');
            quantityInput.setAttribute('type', 'number');
            quantityInput.setAttribute('class', 'cart-item-quantity');
            quantityInput.setAttribute('value', item.quantity);
            quantityInput.setAttribute('min', '1');
            const removeButton = document.createElement('button');
            removeButton.setAttribute('class', 'btn btn-sm btn-danger remove-item');
            removeButton.textContent = 'X';
            itemControls.appendChild(quantityInput);
            itemControls.appendChild(removeButton);

            listItem.appendChild(itemDetails);
            listItem.appendChild(itemControls);

            cartList.appendChild(listItem);
            total += item.price * item.quantity;
        });

        cartTotal.textContent = total.toFixed(2);
    }

    cartList.addEventListener('input', function (event) {
        if (event.target.classList.contains('cart-item-quantity')) {
            const itemName = event.target.parentElement.parentElement.querySelector('.cart-item-name').textContent;
            const item = cartItems.find(item => item.name === itemName);
            item.quantity = parseInt(event.target.value);
            updateCart();
            generateReceipt();
        }
    });

    cartList.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-item')) {
            const itemName = event.target.parentElement.parentElement.querySelector('.cart-item-name').textContent;
            const itemIndex = cartItems.findIndex(item => item.name === itemName);
            cartItems.splice(itemIndex, 1);
            updateCart();
            generateReceipt();
        }
    });

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
            // Display checkout modal
            $('#checkoutModal').modal('show');
        }
    });

    function generateReceipt() {
        const customerName = document.getElementById('name').value;
        const customerEmail = document.getElementById('email').value;
        const customerAddress = document.getElementById('address').value;
        const paymentMethod = document.getElementById('paymentMethod').value;
        const receiptProductList = document.getElementById('receiptProductList');

        receiptProductList.innerHTML = '';
    
        let totalPrice = 0;
    
        cartItems.forEach(item => {
            const receiptItem = document.createElement('li');
            receiptItem.classList.add('list-group-item');
            receiptItem.textContent = `${item.name} x ${item.quantity} - ₱${item.price * item.quantity}`;
            receiptProductList.appendChild(receiptItem);
            totalPrice += item.price * item.quantity;
        });
    
        document.getElementById('customerName').textContent = customerName;
        document.getElementById('customerEmail').textContent = customerEmail;
        document.getElementById('customerAddress').textContent = customerAddress;
        document.getElementById('totalPrice').textContent = `₱${totalPrice.toFixed(2)}`;
        document.getElementById('paymentMethod').value = paymentMethod; 
    }
    
    checkoutForm.addEventListener('submit', function (event) {
        event.preventDefault();
    
        const paymentMethod = checkoutForm.elements['paymentMethod'].value;
    
        // Display receipt modal and generate receipt
        $('#checkoutModal').modal('hide'); // Hide checkout modal
        $('#receiptModal').modal('show'); // Show receipt modal
        generateReceipt(); // Generate receipt content
    });
});

// Function to show only products with the selected category
function filterProducts(category) {
    const productCards = document.querySelectorAll('.cardProducts');
    productCards.forEach(card => {
        const cardCategory = card.parentElement.getAttribute('data-category');
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
