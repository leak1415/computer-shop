class CartDropdown {
    constructor() {
        this.cartItems = [];
        this.init();
    }

    init() {
        this.bindEvents();
        this.loadCartFromStorage();
    }

    bindEvents() {
        // Handle cart icon click
        document.addEventListener('click', (e) => {
            if (e.target.closest('.cart-link')) {
                e.preventDefault();
                this.toggleCart();
            }
        });

        // Close cart when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.cart-dropdown') && !e.target.closest('.cart-link')) {
                this.closeCart();
            }
        });

        // Handle quantity changes in cart
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('cart-qty-increase')) {
                this.updateCartItemQuantity(e.target.closest('.cart-item'), 1);
            } else if (e.target.classList.contains('cart-qty-decrease')) {
                this.updateCartItemQuantity(e.target.closest('.cart-item'), -1);
            }
        });

        // Handle checkout button
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('checkout-btn')) {
                this.proceedToCheckout();
            }
        });
    }

    toggleCart() {
        const existingDropdown = document.getElementById('cartDropdown');
        if (existingDropdown) {
            this.closeCart();
        } else {
            this.openCart();
        }
    }

    openCart() {
        const dropdown = this.createCartDropdown();
        document.body.appendChild(dropdown);
        
        // Position the dropdown
        this.positionDropdown(dropdown);
        
        // Add animation
        setTimeout(() => {
            dropdown.classList.add('show');
        }, 10);
    }

    closeCart() {
        const dropdown = document.getElementById('cartDropdown');
        if (dropdown) {
            dropdown.classList.remove('show');
            setTimeout(() => {
                dropdown.remove();
            }, 300);
        }
    }

    positionDropdown(dropdown) {
        const cartLink = document.querySelector('.cart-link');
        if (cartLink) {
            const rect = cartLink.getBoundingClientRect();
            dropdown.style.top = rect.bottom + window.scrollY + 10 + 'px';
            dropdown.style.right = (window.innerWidth - rect.right) + 'px';
        }
    }

    createCartDropdown() {
        const dropdown = document.createElement('div');
        dropdown.id = 'cartDropdown';
        dropdown.className = 'cart-dropdown';
        
        const cartContent = this.generateCartContent();
        dropdown.innerHTML = cartContent;
        
        return dropdown;
    }

    generateCartContent() {
        if (this.cartItems.length === 0) {
            return `
                <div class="cart-empty">
                    <i class="bi bi-cart-x"></i>
                    <h4>Your cart is empty</h4>
                    <p>Add some products to get started!</p>
                    <button class="btn btn-primary" onclick="this.closest('.cart-dropdown').remove()">Continue Shopping</button>
                </div>
            `;
        }

        const cartItemsHTML = this.cartItems.map(item => `
            <div class="cart-item" data-product-id="${item.id}">
                <div class="cart-item-image">
                    <img src="${item.image}" alt="${item.name}">
                </div>
                <div class="cart-item-details">
                    <h5 class="cart-item-name">${item.name}</h5>
                    <p class="cart-item-specs">${item.specs.join(' • ')}</p>
                    <div class="cart-item-price">
                        <span class="current-price">${item.price}</span>
                        ${item.oldPrice ? `<span class="old-price">${item.oldPrice}</span>` : ''}
                        <span class="item-total">× ${item.quantity} = $${(parseFloat(item.price.replace(/[^0-9.]/g, '')) * item.quantity).toFixed(2)}</span>
                    </div>
                </div>
                <div class="cart-item-controls">
                    <div class="cart-quantity">
                        <button class="cart-qty-decrease">-</button>
                        <input type="number" value="${item.quantity}" min="1" max="10" readonly>
                        <button class="cart-qty-increase">+</button>
                    </div>
                    <button class="cart-item-remove" onclick="confirmRemoveItem(this)" title="Remove item">
                        <i class="bi bi-trash3-fill"></i>
                    </button>
                </div>
            </div>
        `).join('');

        const totals = this.calculateTotal();

        return `
            <div class="cart-header">
                <h4>Shopping Cart (${this.cartItems.length} items)</h4>
                <button class="cart-close" onclick="this.closest('.cart-dropdown').remove()">
                    <i class="bi bi-x"></i>
                </button>
            </div>
            
            <div class="cart-items">
                ${cartItemsHTML}
            </div>
            
            <div class="cart-summary">
                <div class="summary-row">
                    <span>Subtotal:</span>
                    <span>$${totals.subtotal.toFixed(2)}</span>
                </div>
                <div class="summary-row">
                    <span>Tax (8%):</span>
                    <span>$${totals.tax.toFixed(2)}</span>
                </div>
                <div class="summary-row">
                    <span>Shipping:</span>
                    <span>${totals.shipping === 0 ? 'FREE' : '$' + totals.shipping.toFixed(2)}</span>
                </div>
                <div class="summary-row total">
                    <span>Total:</span>
                    <span>$${totals.total.toFixed(2)}</span>
                </div>
                ${totals.shipping > 0 ? '<p class="free-shipping-note">Add $' + (500 - totals.subtotal).toFixed(2) + ' more for FREE shipping!</p>' : '<p class="free-shipping-success">✓ You qualify for FREE shipping!</p>'}
            </div>
            
            <div class="cart-actions">
                <button class="btn btn-outline-secondary view-cart-btn">View Cart</button>
                <button class="btn btn-success checkout-btn">Proceed to Checkout</button>
            </div>
        `;
    }

    addToCart(productData, quantity = 1) {
        const existingItem = this.cartItems.find(item => item.id === productData.id);
        
        if (existingItem) {
            existingItem.quantity += quantity;
        } else {
            this.cartItems.push({
                id: productData.id || Date.now(),
                name: productData.name,
                price: productData.price,
                oldPrice: productData.oldPrice,
                image: productData.image,
                specs: productData.specs || [],
                quantity: quantity
            });
        }
        
        this.saveCartToStorage();
        this.updateCartCount();
        this.refreshCartDisplay();
        
        // Show notification
        this.showNotification(`${quantity} × ${productData.name} added to cart!`, 'success');
    }

    updateCartItemQuantity(cartItemElement, change) {
        const productId = cartItemElement.dataset.productId;
        const item = this.cartItems.find(item => item.id == productId);
        
        if (item) {
            const newQuantity = item.quantity + change;
            if (newQuantity >= 1 && newQuantity <= 10) {
                item.quantity = newQuantity;
                this.saveCartToStorage();
                this.refreshCartDisplay();
                this.updateCartCount();
            }
        }
    }

    removeCartItem(cartItemElement) {
        const productId = cartItemElement.dataset.productId;
        const itemIndex = this.cartItems.findIndex(item => item.id == productId);
        
        if (itemIndex > -1) {
            const removedItem = this.cartItems[itemIndex];
            const removedQuantity = removedItem.quantity;
            const removedPrice = parseFloat(removedItem.price.replace(/[^0-9.]/g, '')) * removedQuantity;
            
            // Remove item with animation
            cartItemElement.style.transform = 'translateX(100%)';
            cartItemElement.style.opacity = '0';
            
            setTimeout(() => {
                this.cartItems.splice(itemIndex, 1);
                this.saveCartToStorage();
                this.updateCartCount();
                this.refreshCartDisplay();
                
                // Show detailed notification
                this.showNotification(
                    `${removedItem.name} (${removedQuantity}x) removed from cart. -$${removedPrice.toFixed(2)}`, 
                    'info'
                );
                
                // If cart is now empty, show empty state
                if (this.cartItems.length === 0) {
                    this.showNotification('Your cart is now empty', 'info');
                }
            }, 300);
        }
    }

    calculateSubtotal() {
        return this.cartItems.reduce((total, item) => {
            const price = parseFloat(item.price.replace(/[^0-9.]/g, ''));
            const quantity = parseInt(item.quantity) || 1;
            return total + (price * quantity);
        }, 0);
    }

    calculateTotal() {
        const subtotal = this.calculateSubtotal();
        const shipping = subtotal > 500 ? 0 : 25;
        const tax = subtotal * 0.08; // 8% tax
        const total = subtotal + shipping + tax;
        
        return {
            subtotal: subtotal,
            shipping: shipping,
            tax: tax,
            total: total
        };
    }

    refreshCartDisplay() {
        const dropdown = document.getElementById('cartDropdown');
        if (dropdown) {
            const cartContent = this.generateCartContent();
            dropdown.innerHTML = cartContent;
            dropdown.classList.add('show');
        }
    }

    updateCartCount() {
        const cartCountElements = document.querySelectorAll('.cart-count');
        const totalItems = this.cartItems.reduce((total, item) => total + item.quantity, 0);
        
        cartCountElements.forEach(element => {
            element.textContent = totalItems;
        });
    }

    saveCartToStorage() {
        localStorage.setItem('cartItems', JSON.stringify(this.cartItems));
    }

    loadCartFromStorage() {
        const stored = localStorage.getItem('cartItems');
        if (stored) {
            try {
                this.cartItems = JSON.parse(stored);
                this.updateCartCount();
            } catch (e) {
                this.cartItems = [];
            }
        }
    }

    proceedToCheckout() {
        if (this.cartItems.length === 0) {
            this.showNotification('Your cart is empty!', 'error');
            return;
        }
        
        this.showNotification('Redirecting to checkout...', 'info');
        // In a real app, redirect to checkout page
        // window.location.href = 'checkout.php';
        
        setTimeout(() => {
            this.closeCart();
        }, 1500);
    }

    showNotification(message, type = 'info') {
        // Remove existing notifications
        const existingNotifications = document.querySelectorAll('.notification-toast');
        existingNotifications.forEach(notification => notification.remove());

        const notification = document.createElement('div');
        notification.className = `notification-toast toast align-items-center text-white bg-${type === 'success' ? 'success' : type === 'error' ? 'danger' : 'primary'} border-0`;
        notification.setAttribute('role', 'alert');
        notification.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">
                    ${message}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        `;

        // Position notification
        notification.style.position = 'fixed';
        notification.style.top = '20px';
        notification.style.right = '20px';
        notification.style.zIndex = '9999';

        document.body.appendChild(notification);

        // Initialize and show toast
        const toast = new bootstrap.Toast(notification, {
            autohide: true,
            delay: 3000
        });
        toast.show();

        // Clean up after toast is hidden
        notification.addEventListener('hidden.bs.toast', () => {
            notification.remove();
        });
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.cartDropdown = new CartDropdown();
});

// Global function for confirming item removal
window.confirmRemoveItem = function(button) {
    const cartItem = button.closest('.cart-item');
    const productName = cartItem.querySelector('.cart-item-name').textContent;
    const quantity = cartItem.querySelector('.cart-quantity input').value;
    
    // Create confirmation dialog
    const confirmed = confirm(`Are you sure you want to remove "${productName}" (${quantity}x) from your cart?`);
    
    if (confirmed) {
        window.cartDropdown.removeCartItem(cartItem);
    }
};

// Global function to add items to cart (called from product modal)
window.addToCartFromModal = function(productData, quantity = 1) {
    if (window.cartDropdown) {
        window.cartDropdown.addToCart(productData, quantity);
    }
};
