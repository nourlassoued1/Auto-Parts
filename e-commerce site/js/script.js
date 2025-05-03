
  
    function addToCart() {
        
        const productCard = event.target.closest('.prod, .product-card');
        const productName = productCard.querySelector('h2, h3').textContent;
        const productPrice = parseFloat(productCard.querySelector('.price').textContent.replace(' DT', '').replace(',', '.'));
        const productImage = productCard.querySelector('img').src;
       
        const product = {
            id: Date.now(), 
            name: productName,
            price: productPrice,
            image: productImage,
            quantity: 1
        };
        
        
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        
        // Vérifier si le produit est déjà dans le panier
        const existingProductIndex = cart.findIndex(item => item.name === product.name);
        
        if (existingProductIndex !== -1) {
            
            cart[existingProductIndex].quantity += 1;
        } else {
            
            cart.push(product);
        }
        
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
    
        alert('Produit ajouté au panier !');
    }
    
    function updateCartCount() {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
        document.getElementById('cart-count').textContent = totalItems;
    }

    document.addEventListener('DOMContentLoaded', updateCartCount);
