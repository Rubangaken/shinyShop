<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShinyShop - Modern E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets\css\style.css">
  
</head>
<body>
    <div class="shiny-bg"></div>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">ShinyShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>lar
                    <li class="nav-item">
                        <a class="nav-link" href="#cart">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        <section id="home" class="text-center">
            <h1 class="display-4 mb-4">Welcome to ShinyShop</h1>
            <p class="lead">Discover our amazing products with a touch of shine!</p>
        </section>

        <section id="products" class="mt-5">
            <h2 class="text-center mb-4">Our Products</h2>
            <div class="row" id="product-list">
                <!-- Product cards will be dynamically added here -->
                 <!-- <img src="public\assets\images\gizmo.jpeg" alt=""> -->
            </div>
        </section>

        <section id="cart" class="mt-5">
            <h2 class="text-center mb-4">Shopping Cart</h2>
            <ul id="cart-items" class="list-group">
                <!-- Cart items will be dynamically added here -->
            </ul>
            <div class="text-end mt-3">
                <h4>Total: $<span id="cart-total">0.00</span></h4>
                <button class="btn btn-primary" onclick="checkout()">Checkout</button>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="assets\script\script.js"></script>
</body>
</html>
