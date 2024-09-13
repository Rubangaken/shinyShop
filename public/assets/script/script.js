const products = [
    { id: 1, name: "Shiny Gadget", price: 99.99, image: "/assets/images/headphones.jpeg" },
    { id: 2, name: "Gleaming Gizmo", price: 149.99, image: "/assets/images/gizmo.jpeg" },
    { id: 3, name: "Lustrous Laptop", price: 999.99, image: "/assets/images/laptop.jpeg" },
    { id: 4, name: "Radiant Robot", price: 299.99, image: "/assets/images/robot.jpeg" }
];

const cart = [];

function displayProducts() {
    const productList = document.getElementById("product-list");
    productList.innerHTML = "";

    products.forEach(product => {
        const productCard = document.createElement("div");
        productCard.className = "col-md-3 mb-4";
        productCard.innerHTML = `
            <div class="card product-card">
                <img src="${product.image}" class="card-img-top" alt="${product.name}">
                <div class="card-body">
                    <h5 class="card-title">${product.name}</h5>
                    <p class="card-text">$${product.price.toFixed(2)}</p>
                    <button class="btn btn-primary" onclick="addToCart(${product.id})">Add to Cart</button>
                </div>
            </div>
        `;
        productList.appendChild(productCard);
    });
}

function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    if (product) {
        cart.push(product);
        updateCart();
    }
}

function updateCart() {
    const cartItems = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");
    cartItems.innerHTML = "";

    let total = 0;
    cart.forEach(item => {
        const li = document.createElement("li");
        li.className = "list-group-item d-flex justify-content-between align-items-center";
        li.innerHTML = `
            ${item.name}
            <span>$${item.price.toFixed(2)}</span>
        `;
        cartItems.appendChild(li);
        total += item.price;
    });

    cartTotal.textContent = total.toFixed(2);
}

function checkout() {
    if (cart.length === 0) {
        alert("Your cart is empty!");
    } else {
        alert("Thank you for your purchase!");
        cart.length = 0;
        updateCart();
    }
}

// Initialize the page
displayProducts();