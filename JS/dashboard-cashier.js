// Sample product data
const products = [
    { category: "Hot Coffee", name: "Original Blend", price: 99.00 },
    { category: "Hot Coffee", name: "Capuccino", price: 99.00 },
    { category: "Hot Coffee", name: "Espresso", price: 99.00 },
    { category: "Hot Coffee", name: "Americano", price: 99.00 },
    { category: "Hot Coffee", name: "Cafe latte", price: 99.00 },
    { category: "Hot Coffee", name: "Spanish Latte", price: 99.00 },
    { category: "Hot Coffee", name: "Caramel M.", price: 99.00 },
  
    { category: "Iced Coffee", name: "Capuccino", price: 89.00 },
    { category: "Iced Coffee", name: "Americano", price: 89.00 },
    { category: "Iced Coffee", name: "Hazelnut M.", price: 89.00 },
    { category: "Iced Coffee", name: "Caramel", price: 89.00 },
    { category: "Iced Coffee", name: "Cold Brew", price: 89.00 },
    { category: "Iced Coffee", name: "Latte", price: 89.00 },
    { category: "Iced Coffee", name: "Mocha", price: 89.00 },
    { category: "Iced Coffee", name: "Vanilla", price: 89.00 },
  
    { category: "Hot Chocolate", name: "Classic", price: 99.00 },
    { category: "Hot Chocolate", name: "Spiced Hot", price: 99.00 },
    { category: "Hot Chocolate", name: "Peppermint C.", price: 99.00 },
  
    { category: "Berry Lemonades", name: "Strawberry", price: 89.00 },
    { category: "Berry Lemonades", name: "Blueberry", price: 89.00 },
    { category: "Berry Lemonades", name: "Raspberry", price: 89.00 },
    { category: "Stone Fruit", name: "Peach", price: 89.00 },
    { category: "Stone Fruit", name: "Apricot", price: 89.00 },
    { category: "Stone Fruit", name: "Mango", price: 89.00 },
  
    { category: "Pasta", name: "Lasagna", price: 89.00 },
    { category: "Pasta", name: "Seafood pasta", price: 89.00 },
    { category: "Pasta", name: "Spaghetti", price: 89.00 },
    { category: "Pasta", name: "Carbonara", price: 89.00 },
  
    { category: "Sandwiches", name: "Ham and Egg", price: 59.00 },
    { category: "Sandwiches", name: "Grilled Beef", price: 59.00 },
    { category: "Sandwiches", name: "Bacon and Egg", price: 59.00 },
    { category: "Sandwiches", name: "Vegetarian", price: 59.00 },
  
    { category: "Pastries", name: "Croissant", price: 69.00 },
    { category: "Pastries", name: "Muffins", price: 69.00 },
    { category: "Pastries", name: "Cream Puff", price: 69.00 },
  
    // Sliced Cakes
    { category: "Sliced cakes", name: "Sans Rival", price: 109.00 },
    { category: "Sliced cakes", name: "Chocolate", price: 109.00 },
    { category: "Sliced cakes", name: "Cheesecake", price: 109.00 },
    { category: "Sliced cakes", name: "Red Velvet", price: 109.00 },
    { category: "Sliced cakes", name: "Tiramisu", price: 109.00 },
  
    // Seasonal Drinks
    { category: "Seasonal Drinks", name: "Tsokolate Batirol (Independence Day)", price: 119.00 },
    { category: "Seasonal Drinks", name: "Panettone Latte (Christmas Season)", price: 119.00 },
    { category: "Seasonal Drinks", name: "Pumpkin Sliced Latte (Halloween Season)", price: 119.00 },
    { category: "Seasonal Drinks", name: "Ginger Bread Latte (Christmas Season)", price: 119.00 },
    { category: "Seasonal Drinks", name: "Sparkling Cranberry Punch (New Year Eve)", price: 119.00 },
  
    // Seasonal Foods
    { category: "Seasonal Foods", name: "King Cake (Mardi Gras)", price: 109.00 },
    { category: "Seasonal Foods", name: "Santa's Chipper Cake (Christmas)", price: 109.00 },
    { category: "Seasonal Foods", name: "Baked Cheesy Salmon w Lime (Lenten Season)", price: 109.00 },
    { category: "Seasonal Foods", name: "Heart-shaped Cookies (Valentines)", price: 109.00 },
    { category: "Seasonal Foods", name: "Pumpkin Soup (Halloween)", price: 109.00 },
    { category: "Seasonal Foods", name: "Pau au Chocolat", price: 109.00 },
  
    // Souvenirs & Decorations
    { category: "Souvenirs & Decorations", name: "Christmas V.", price: 140.00 },
    { category: "Souvenirs & Decorations", name: "Christmas L.", price: 125.00 },
    { category: "Souvenirs & Decorations", name: "Ginger BH.", price: 103.00 },
    { category: "Souvenirs & Decorations", name: "DIY Easter Egg Kit", price: 100.00 },
    { category: "Souvenirs & Decorations", name: "Pumpkin and Maple Lights", price: 109.00 },
    { category: "Souvenirs & Decorations", name: "Keychains", price: 45.00 },
    { category: "Souvenirs & Decorations", name: "Ref Magnet 1", price: 59.00 },
    { category: "Souvenirs & Decorations", name: "Ref Magnet 2", price: 59.00 },
    { category: "Souvenirs & Decorations", name: "Gift Baskets (12 Local Candies & 12 Local Chocolates)", price: 125.00 }
  ];
  
  // Sample cart data
  let cart = [];
  
  // Function to generate product cards
  function generateProductCards() {
    const productCardsContainer = document.querySelector('.product-cards');
    productCardsContainer.innerHTML = '';
  
    const categories = Array.from(new Set(products.map(product => product.category))); // Get unique categories
  
    categories.forEach(category => {
        const categoryHeader = document.createElement('h4');
        categoryHeader.textContent = category;
        productCardsContainer.appendChild(categoryHeader);
  
        const categoryProducts = products.filter(product => product.category === category);
  
        const categoryCardsContainer = document.createElement('div');
        categoryCardsContainer.classList.add('category-cards-container', 'mb-4', 'border');
        productCardsContainer.appendChild(categoryCardsContainer);
  
        categoryProducts.forEach(product => {
            const card = document.createElement('div');
            card.classList.add('card', 'mb-3');
            card.innerHTML = `
  <!-- Image placeholder -->
  <div class="card-body">
    <h5 class="card-title">${product.name}</h5>
    <p class="card-text">&#8369; ${product.price.toFixed(2)}</p>
  </div>
  `;
            card.addEventListener('click', function () {
                addToCart(product.name, product.price);
            });
            categoryCardsContainer.appendChild(card);
        });
    });
  }
  
  // Function to update add to cart section
  function updateCart() {
    const cartContainer = document.querySelector('.add-to-cart');
    cartContainer.innerHTML = '';
  
    cart.forEach(item => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item', 'mb-2');
        cartItem.innerHTML = `
        <div>${item.name}</div>
        <div>&#8369;${item.price.toFixed(2)}</div>
        <div>
        <input type="number" min="1" value="${item.quantity}" class="quantity-input"><p>Qty.</p>
        <button class="btn btn-danger btn-sm remove-from-cart-btn remove-btn" data-name="${item.name}">Remove</button>
        </div>
        `;
        cartContainer.appendChild(cartItem);
    });
  }
  
  // Function to calculate total
  function calculateTotal() {
    let subtotal = 0;
    cart.forEach(item => {
        subtotal += item.price * item.quantity;
    });

    const discount = 0; // You can implement discount logic here
    const grandTotal = subtotal - (subtotal * discount / 100);

    const tenderedAmount = parseFloat(document.getElementById('tendered').value);
    const change = tenderedAmount >= grandTotal ? (tenderedAmount - grandTotal).toFixed(2) : 0;

    document.getElementById('subtotal').textContent = `${subtotal.toFixed(2)}`;
    document.getElementById('discount').textContent = `${discount}%`;
    document.getElementById('grand-total').textContent = `${grandTotal.toFixed(2)}`;
    document.getElementById('change').textContent = `${change}`;
}

  
  // Function to add item to cart
  function addToCart(name, price) {
    const existingItem = cart.find(item => item.name === name);
    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push({ name, price, quantity: 1 });
    }
  
    updateCart();
    calculateTotal();
  }
  
  // Function to generate numpad buttons
  function generateNumpad() {
    const numpadContainer = document.querySelector('.numpad');
    const buttons = [
        '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '00', '50', '100', '500', '1000', 'Clear'
    ];

    buttons.forEach(button => {
        const btn = document.createElement('button');
        btn.classList.add('btn', 'btn-secondary', 'mx-1', 'my-1', 'numpad-btn');
        btn.textContent = button;
        numpadContainer.appendChild(btn);
    });
}

  
  // Event listener for remove from cart button clicks
  document.addEventListener('click', function (event) {
    if (event.target.classList.contains('remove-from-cart-btn')) {
        const name = event.target.getAttribute('data-name');
        const index = cart.findIndex(item => item.name === name);
        cart.splice(index, 1);
        updateCart();
        calculateTotal();
    }
  });
  
  // Event listener for quantity input changes
  document.addEventListener('change', function (event) {
    if (event.target.classList.contains('quantity-input')) {
        const name = event.target.previousElementSibling.previousElementSibling.textContent;
        const quantity = parseInt(event.target.value);
  
        const item = cart.find(item => item.name === name);
        if (item) {
            item.quantity = quantity;
            updateCart();
            calculateTotal();
        }
    }
  });
  
  
  document.addEventListener('click', function (event) {
    if (event.target.classList.contains('numpad-btn')) {
        const value = event.target.textContent;
        const tenderedInput = document.getElementById('tendered');
        if (value === '.' && tenderedInput.value.includes('.')) {
            return; // Prevent adding multiple decimal points
        }
        tenderedInput.value += value;
    }

    if (event.target.id === 'complete-sale-btn') {
        const tenderedAmount = parseFloat(document.getElementById('tendered').value);
        const subtotal = parseFloat(document.getElementById('subtotal').textContent);

        if (tenderedAmount >= subtotal) {
            const change = tenderedAmount - subtotal;
            showAlert('success', `Payment received! Change: ₱${change.toFixed(2)}`);
            document.getElementById('cashChange').textContent = `${change.toFixed(2)}`; 
            // Reset cart and input fields
            cart = [];
            document.querySelector('.add-to-cart').innerHTML = '';
            document.getElementById('tendered').value = '';
            calculateTotal(); // Reset total
        } else {
            showAlert('danger', `Insufficient payment amount.`);
        }
    }

    // Handle "Received Payment" button click
    if (event.target.id === 'received-payment-btn') {
        const tenderedAmount = parseFloat(document.getElementById('tendered').value);
        const subtotal = parseFloat(document.getElementById('subtotal').textContent);

        if (tenderedAmount >= subtotal) {
            const change = tenderedAmount - subtotal;
            showAlert('success', `Payment received! Change: ₱${change.toFixed(2)}`);
            document.getElementById('cashChange').textContent = `${change.toFixed(2)}`;
            // Reset cart and input fields
            cart = [];
            document.querySelector('.add-to-cart').innerHTML = '';
            document.getElementById('tendered').value = '';
            calculateTotal(); // Reset total
        } else {
            showAlert('danger', 'Insufficient payment amount.');
        }
    }

    // Event listener for clear cart button click
    if (event.target.id === 'clear-cart-btn') {
        // Show confirmation modal for clearing cart
        const clearCartModal = new bootstrap.Modal(document.getElementById('clearCartModal'));
        clearCartModal.show();
    }
});

  
  // Event listener for confirmation to clear cart
  document.getElementById('confirm-clear-cart-btn').addEventListener('click', function () {
    // Clear cart logic
    cart = [];
    document.querySelector('.add-to-cart').innerHTML = '';
    document.getElementById('tendered').value = '';
    document.getElementById('cashChange').textContent = '0.00';
    calculateTotal();
  });
  
  
  // Function to filter product cards based on search query
  function filterProducts(query) {
    const productCards = document.querySelectorAll('.product-cards .card');
    productCards.forEach(card => {
        const productName = card.querySelector('.card-title').textContent.toLowerCase();
        if (productName.includes(query.toLowerCase())) {
            card.style.display = 'inline-block';
        } else {
            card.style.display = 'none';
        }
    });
  }
  
  // Event listener for search input changes
  document.getElementById('search-input').addEventListener('input', function (event) {
    const searchQuery = event.target.value.trim();
    filterProducts(searchQuery);
  });
  
  // Function to show Bootstrap alerts
  function showAlert(type, message) {
    const alertContainer = document.getElementById('alert-container');
    const alertDiv = document.createElement('div');
    alertDiv.classList.add('alert', `alert-${type}`, 'alert-dismissible', 'fade', 'show');
    alertDiv.setAttribute('role', 'alert');
    alertDiv.innerHTML = `
    ${message}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    alertContainer.appendChild(alertDiv);
    setTimeout(() => {
        alertDiv.remove();
    }, 7000);
  }
  
  // Call initial functions
  generateProductCards();
  generateNumpad();
  calculateTotal();