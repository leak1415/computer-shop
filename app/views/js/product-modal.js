class ProductModal {
    constructor() {
        this.init();
    }

    init() {
        this.bindEvents();
    }

    bindEvents() {
        // Handle clicks on product cards
        document.addEventListener('click', (e) => {
            if (e.target.closest('.add-to-cart') || e.target.closest('.quick-view-btn')) {
                e.preventDefault();
                const productCard = e.target.closest('.product-card');
                if (productCard) {
                    const productData = this.extractProductData(productCard);
                    this.showProductModal(productData);
                }
            }
        });

        // Handle modal close
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('modal-close') || e.target.classList.contains('modal-overlay')) {
                this.closeModal();
            }
        });

        // Handle quantity changes
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('qty-increase')) {
                this.changeQuantity(1);
            } else if (e.target.classList.contains('qty-decrease')) {
                this.changeQuantity(-1);
            }
        });

        // Handle tab clicks for image gallery
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('image-thumb')) {
                this.switchMainImage(e.target);
            }
        });
    }

    extractProductData(productCard) {
        return {
            name: productCard.querySelector('.product-title')?.textContent || 'Unknown Product',
            category: productCard.querySelector('.product-category')?.textContent || 'Laptop',
            price: productCard.querySelector('.current-price')?.textContent || '$0',
            oldPrice: productCard.querySelector('.old-price')?.textContent || '',
            specs: Array.from(productCard.querySelectorAll('.product-specs span')).map(span => span.textContent),
            rating: productCard.querySelector('.product-rating')?.innerHTML || '',
            image: productCard.querySelector('.card-img-top')?.src || '',
            description: 'High-performance laptop designed for professionals and enthusiasts. Features cutting-edge technology, premium build quality, and exceptional reliability for all your computing needs.'
        };
    }

    showProductModal(product) {
        // Remove existing modal if any
        const existingModal = document.getElementById('productModal');
        if (existingModal) {
            existingModal.remove();
        }

        const modal = this.createModalHTML(product);
        document.body.appendChild(modal);
        document.body.style.overflow = 'hidden';

        // Add animation
        setTimeout(() => {
            modal.classList.add('active');
        }, 10);
    }

    createModalHTML(product) {
        const modal = document.createElement('div');
        modal.id = 'productModal';
        modal.className = 'product-modal';
        modal.innerHTML = `
            <div class="modal-overlay" onclick="this.closest('.product-modal').remove()"></div>
            <div class="modal-content">
                <button class="modal-close">&times;</button>
                
                <div class="modal-body">
                    <div class="product-gallery">
                        <div class="main-image">
                            <img src="${product.image}" alt="${product.name}" id="mainProductImage">
                        </div>
                        <div class="image-thumbnails">
                            ${this.generateThumbnails(product.image)}
                        </div>
                    </div>
                    
                    <div class="product-details">
                        <div class="product-breadcrumb">
                            <span>Home</span> / <span>${product.category}</span> / <span>${product.name}</span>
                        </div>
                        
                        <h1 class="product-title">${product.name}</h1>
                        
                        <div class="product-rating">
                            ${product.rating}
                            <span class="review-count">(245 Reviews)</span>
                        </div>
                        
                        <div class="price-section">
                            <span class="current-price">${product.price}</span>
                            ${product.oldPrice ? `<span class="old-price">${product.oldPrice}</span>` : ''}
                            <span class="discount-badge">20% OFF</span>
                        </div>
                        
                        <div class="product-description">
                            <h3>Description</h3>
                            <p>${product.description}</p>
                        </div>
                        
                        <div class="product-specifications">
                            <h3>Specifications</h3>
                            <div class="specs-grid">
                                ${product.specs.map(spec => `<div class="spec-item">${spec}</div>`).join('')}
                                <div class="spec-item">512GB SSD</div>
                                <div class="spec-item">15.6" Display</div>
                                <div class="spec-item">Windows 11 Pro</div>
                                <div class="spec-item">2.5kg Weight</div>
                            </div>
                        </div>
                        
                        <div class="purchase-section">
                            <div class="quantity-selector">
                                <label>Quantity:</label>
                                <div class="quantity-controls">
                                    <button class="qty-decrease">-</button>
                                    <input type="number" id="productQuantity" value="1" min="1" max="10" readonly>
                                    <button class="qty-increase">+</button>
                                </div>
                            </div>
                            
                            <div class="action-buttons">
                                <button class="btn btn-primary btn-lg add-to-cart-btn" onclick="addToCart()">
                                    <i class="bi bi-cart-plus"></i> Add to Cart
                                </button>
                                <button class="btn btn-success btn-lg buy-now-btn" onclick="buyNow()">
                                    <i class="bi bi-lightning-fill"></i> Buy Now
                                </button>
                            </div>
                        </div>
                        
                        <div class="product-features">
                            <div class="feature-item">
                                <i class="bi bi-truck"></i>
                                <span>Free Shipping</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-shield-check"></i>
                                <span>2 Year Warranty</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-arrow-repeat"></i>
                                <span>30-Day Returns</span>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-headset"></i>
                                <span>24/7 Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

        return modal;
    }

    generateThumbnails(mainImage) {
        const thumbnails = [
            mainImage,
            mainImage.replace(/(\d+)\.png/, (match, num) => (parseInt(num) % 12 + 1) + '.png'),
            mainImage.replace(/(\d+)\.png/, (match, num) => ((parseInt(num) + 1) % 12 + 1) + '.png'),
            mainImage.replace(/(\d+)\.png/, (match, num) => ((parseInt(num) + 2) % 12 + 1) + '.png')
        ];

        return thumbnails.map((thumb, index) => `
            <img src="${thumb}" alt="Product view ${index + 1}" 
                 class="image-thumb ${index === 0 ? 'active' : ''}" 
                 onclick="switchMainImage(this)">
        `).join('');
    }

    switchMainImage(thumbElement) {
        const mainImage = document.getElementById('mainProductImage');
        if (mainImage && thumbElement) {
            mainImage.src = thumbElement.src;
            
            // Update active thumbnail
            document.querySelectorAll('.image-thumb').forEach(thumb => {
                thumb.classList.remove('active');
            });
            thumbElement.classList.add('active');
        }
    }

    changeQuantity(change) {
        const qtyInput = document.getElementById('productQuantity');
        if (qtyInput) {
            let newValue = parseInt(qtyInput.value) + change;
            newValue = Math.max(1, Math.min(10, newValue));
            qtyInput.value = newValue;
        }
    }

    closeModal() {
        const modal = document.getElementById('productModal');
        if (modal) {
            modal.classList.remove('active');
            setTimeout(() => {
                modal.remove();
                document.body.style.overflow = '';
            }, 300);
        }
    }
}

// Global functions for onclick handlers
function addToCart() {
    const quantity = document.getElementById('productQuantity')?.value || 1;
    const productName = document.querySelector('.product-modal .product-title')?.textContent || 'Product';
    const productPrice = document.querySelector('.product-modal .current-price')?.textContent || '$0';
    const productOldPrice = document.querySelector('.product-modal .old-price')?.textContent || '';
    const productImage = document.querySelector('.product-modal #mainProductImage')?.src || '';
    const productSpecs = Array.from(document.querySelectorAll('.product-modal .specs-grid .spec-item')).map(spec => spec.textContent);
    
    const productData = {
        id: Date.now(), // Temporary ID
        name: productName,
        price: productPrice,
        oldPrice: productOldPrice,
        image: productImage,
        specs: productSpecs
    };
    
    // Add to cart using the cart dropdown system
    if (window.cartDropdown) {
        window.cartDropdown.addToCart(productData, parseInt(quantity));
    }
    
    // Close modal after a short delay
    setTimeout(() => {
        document.getElementById('productModal')?.remove();
        document.body.style.overflow = '';
    }, 1000);
}

function buyNow() {
    const quantity = document.getElementById('productQuantity')?.value || 1;
    const productName = document.querySelector('.product-modal .product-title')?.textContent || 'Product';
    const price = document.querySelector('.product-modal .current-price')?.textContent || '$0';
    
    // Show notification
    showNotification(`Processing order for ${quantity} × ${productName}...`, 'info');
    
    // Simulate redirect to checkout
    setTimeout(() => {
        showNotification('Redirecting to checkout...', 'success');
        // In a real app, you would redirect to checkout page
        // window.location.href = 'checkout.php';
    }, 2000);
}

function switchMainImage(thumbElement) {
    const mainImage = document.getElementById('mainProductImage');
    if (mainImage && thumbElement) {
        mainImage.src = thumbElement.src;
        
        // Update active thumbnail
        document.querySelectorAll('.image-thumb').forEach(thumb => {
            thumb.classList.remove('active');
        });
        thumbElement.classList.add('active');
    }
}

function showNotification(message, type = 'info') {
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

function updateCartCount() {
    // Simulate cart count update
    const cartCountElements = document.querySelectorAll('.cart-count');
    const currentCount = parseInt(cartCountElements[0]?.textContent || '0');
    const newCount = currentCount + 1;
    
    cartCountElements.forEach(element => {
        element.textContent = newCount;
    });
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new ProductModal();
});
