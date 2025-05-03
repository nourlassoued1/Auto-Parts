
document.addEventListener('DOMContentLoaded', loadCart);

function loadCart() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    displayCart(cart);
    updateCartCount();
}

//  afficher le panier
function displayCart(cart) {
    const cartItemsContainer = document.getElementById('cart-items');
    const cartSummary = document.getElementById('cart-summary');
    
    if (cart.length === 0) {
        cartItemsContainer.innerHTML = `
            <div class="empty-cart">
                <p>Votre panier est vide</p>
                <a href="index.php" class="checkout-btn">Continuer vos achats</a>
            </div>
        `;
        cartSummary.style.display = 'none';
        return;
    }
    
    cartSummary.style.display = 'block';
    
    let cartHTML = `
        <div class="cart-header">
            <div>Produit</div>
            <div>Prix</div>
            <div>Quantité</div>
            <div>Total</div>
            <div>Action</div>
        </div>
    `;
    
    let subtotal = 0;
    
    cart.forEach((item, index) => {
        const itemTotal = item.price * item.quantity;
        subtotal += itemTotal;
        
        cartHTML += `
            <div class="cart-item" data-id="${item.id}">
                <div class="cart-item-info">
                    <img src="${item.image}" alt="${item.name}">
                    <div>
                        <h4>${item.name}</h4>
                        <p>${item.description || ''}</p>
                    </div>
                </div>
                <div>${item.price.toFixed(3)} DT</div>
                <div class="quantity-control">
                    <button onclick="updateQuantity(${index}, -1)">-</button>
                    <input type="number" value="${item.quantity}" min="1" onchange="updateQuantityInput(${index}, this.value)">
                    <button onclick="updateQuantity(${index}, 1)">+</button>
                </div>
                <div>${itemTotal.toFixed(3)} DT</div>
                <div>
                    <button class="remove-item" onclick="removeItem(${index})">×</button>
                </div>
            </div>
        `;
    });
    
    cartItemsContainer.innerHTML = cartHTML;
    
    document.getElementById('subtotal').textContent = subtotal.toFixed(3);
    document.getElementById('total').textContent = subtotal.toFixed(3);
}

// mettre à jour la qté
function updateQuantity(index, change) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const newQuantity = cart[index].quantity + change;
    
    if (newQuantity < 1) return;
    
    cart[index].quantity = newQuantity;
    localStorage.setItem('cart', JSON.stringify(cart));
    displayCart(cart);
    updateCartCount();
}

function updateQuantityInput(index, value) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const newQuantity = parseInt(value);
    
    if (isNaN(newQuantity)) return;
    
    cart[index].quantity = newQuantity;
    localStorage.setItem('cart', JSON.stringify(cart));
    displayCart(cart);
    updateCartCount();
}

// supprimer un article
function removeItem(index) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    displayCart(cart);
    updateCartCount();
}

function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
    document.getElementById('cart-count').textContent = totalItems;
}
