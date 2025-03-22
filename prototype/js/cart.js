// cart.js
let cart = [];

// Function to add item to cart
function addToCart(product) {
    cart.push(product);
    updateCartDisplay();
}

// Function to remove item from cart
function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    updateCartDisplay();
}

// Function to update cart display
function updateCartDisplay() {
    const cartItemsContainer = document.getElementById('cartItems');
    cartItemsContainer.innerHTML = ''; // Clear existing items
    cart.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.textContent = `${item.name} - ${item.price}€`;
        cartItemsContainer.appendChild(itemElement);
    });
}

// Additional functions for cart management can be added here.
