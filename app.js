// JavaScript
document.addEventListener("DOMContentLoaded", function() {
    // Initialize cart count
    let cartCount = 0;
    
    // Get the add to cart buttons
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

    // Add event listener to each add to cart button
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Increment cart count
            cartCount++;
            // Update cart count display
            document.getElementById('cart-count').textContent = cartCount;
        });
    });
});
