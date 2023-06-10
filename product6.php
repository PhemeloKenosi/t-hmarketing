<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";
    $stmt = $mysqli->prepare("SELECT * FROM fuser WHERE customer_id = ?");
    $stmt->bind_param("i", $_SESSION["user_id"]);
    $stmt->execute();
    $fuser = $stmt->get_result()->fetch_assoc();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- Link to Stylesheet -->
    <link rel="stylesheet" href="styles.css">

    <!-- Link to an external JavaScript File -->
    <script src="script.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    

</head>
<body>
  
  <header id="home">

    <div class="delivery-msg area">

        <p class="delivery-msg">WE OFFER FREE DELIVERY FOR PURCHASES OF MORE THAN R1000+</p>


    </div>

    <div class="search-container">
    <form action="search.php" method="GET">
    <input type="text" id="search-input" name="query" placeholder="Search...">
    <button type="submit">Search</button>
    </form>
    </div>
   
   

  

    <section class="navigation w3-metro-light-blue w3-container">
        <button onclick="goToTop()" id="back-to-top" title="Go to top"><i class="fa fa-toggle-up"></i></button>
        <nav class="nav-container">
           
            <div class="logo">
                <a href="index.php">
                     <img src="img\Black_and_White_Round_Fashion_Monogram_Logo-removebg-preview.png" alt="Logo" width="180px" height="180px">
    
                </a>
            </div>

            
            

          <div class="mobile-button">
            <span style="float: right;" onclick="toggleMobileNavigation()">&#9776;</span>
          </div>

         

          <?php if (isset($fuser)): ?>
        <div class="links">
        <p>Welcome <?= htmlspecialchars($fuser["fullname"]) ?></p> <p style="text-align: center;"><a href="logout.php">Log out</a></p>
        </div>
        <?php else: ?>
          
          <div class="links">
          <a href="login.php">Login |</a>
          <a href="register.php" onclick="toggleMobileNavigation()">Register |</a>
          </div>
  
        <?php endif; ?>

          <div class="links">
            <i class="fa-solid fa-heart fa-2xl" style="color:pink;"></i>
            
            <div class="cart-icon">
              <a href="#"onclick="openCart()"><i class="fa-solid fa-cart-shopping fa-2xl" style="color:rgb(77, 187, 77); font-size: 35px;"></i></i></a>
              <div class="cart-icon">
                <span class="item-count" id="item-count">0</span>
            </div>
          </div>
          <div id="mobile-sidenav" class="mobile-links w3-sand">
            <a href="javascript:void(0)" class="closebtn w3-round" onclick="toggleMobileNavigation()">&times;</a>
            <a href="#Login" onclick="toggleMobileNavigation()">Login</a>
            <a href="#register" onclick="toggleMobileNavigation()">Register</a>
            <a href="#Order" onclick="toggleMobileNavigation()">Orders</a>
            <a href="#My Account" onclick="toggleMobileNavigation()">My Account</a>
            <a href="#Wish List" onclick="toggleMobileNavigation()">Wish List</a>
            <a href="#Cart" onclick="toggleMobileNavigation()">Cart</a>
          </div>


        
        </nav>
      </section>



    </header>

<div class="container">
    <div class="image-container">
      <img src="img/Warm_black_trapper_hat-removebg-preview.jpg" alt="Product 6">
    </div>
    <div class="details-container">
      <h2 class="product-title">Warm Trapper Hat With Ear Flaps</h2>
      <p class="desc"> Get your goods upfront and pay for them over 3 interest free instalments of R400.00. Standard shipping terms apply.</p>
      <p class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
      <p class="price">R670.00</p>
      
      <div class="add-to-cart">
        <input type="number" min="1" value="1" id="product6">
        <button onclick="addToCart('Warm Trapper Hat With Ear Flaps', 670.00, 'product6', 'img/Warm_black_trapper_hat-removebg-preview.png')">Add to Cart</button>
      </div>
      
      <a href="#" class="buy-now">Buy Now</a>
      
      <div class="size-color-section">
        <label for="size">Size:</label>
        <select id="size">
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
        </select>
        
        <label for="color">Color:</label>
        <select id="color">
          <option value="red">Black</option>
          <option value="blue">Grey</option>
          <option value="green">Brown</option>
        </select>
      </div>
    </div>
  </div>

  <div class="cart-popup" id="cart-popup">
    <h1 style="text-align: center;">Shopping Cart</h1>
    <div class="cart-items" id="cart-items"></div>
    <div class="total" id="total">Total: R0.00</div>
    <button onclick="closeCart()">Close</button>
</div>

  <footer class="footer">
    <div class="container">
      <div class="footer-columns">
        <div class="footer-column">
        
            <div class="footer-column">
              <h3>Contact Us</h3>
              <div class="contact-section">
                <p> <b>Email:</b>info@hannamarketing.com</p>
                <p> <b>Phone:</b>073 353 5583</p>
              </div>
            </div>

            <h3>Follow us</h3>
            <div class="social-media-icons">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin"></i></a>
          </div>

          <p style="text-align: center; padding-top: 20px;">© 2023 - Hanna Marketing - All rights reserved</p>
  
        </div>
        

      

        <div class="footer-column">
          <h3>About Us</h3>
          <div class="about-section">
            <p>
              Hanna Hats is a family-owned and operated business that has been making handcrafted hats in Donegal, Ireland since 1924. The company was founded by David Hanna Sr., who started out as a bespoke tailor. In the early 1960s, he transitioned into hat making and Hanna Hats was born</p>
          </div>
        </div>
        
        <div class="footer-column">
          <h3>More About</h3>
          <div class="sitemap-section">
            <ul>
              <li><a href="#">Orders</a></li>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Term and conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Delivery</a></li>
              <li><a href="#">Exchanges & Returns</a></li>
            </ul>
          </div>

          <div class="payment-icons">
            <img src="img/applepay-removebg-preview.png" alt="ApplePay">
            <img src="img/paypal-removebg-preview.png" alt="Paypal">
            <img src="img/mastercard-removebg-preview.png" alt="Mastercard">
            <img src="img/googlepay-removebg-preview.png" alt="Google Pay">
            <img src="img/Visa-Logo.png" alt="Visa">
          </div>


        </div>


        
        
      </div>
    </div>
    <p style="text-align: center; padding-top: 20px;">Designed by Phemelo Kenosi</p>
  </footer>

  <script>
    // Add to cart feature
  var cartItems = [];
var itemCount = 0;

// Load cart items from localStorage
var storedCartItems = localStorage.getItem('cartItems');
if (storedCartItems) {
cartItems = JSON.parse(storedCartItems);
itemCount = cartItems.reduce(function(total, item) {
  return total + item.quantity;
}, 0);
updateCartIcon();
}

function addToCart(productName, price, quantityId, imageSrc) {
var quantityElement = document.getElementById(quantityId);
var quantity = parseInt(quantityElement.value);

var item = {
  name: productName,
  price: price,
  quantity: quantity,
  image: imageSrc  // Add the image property with the image source URL
};

var existingItemIndex = cartItems.findIndex(function(cartItem) {
  return cartItem.name === productName;
});

if (existingItemIndex !== -1) {
  cartItems[existingItemIndex].quantity += quantity;
} else {
  cartItems.push(item);
}

itemCount += quantity;
updateCartIcon();
updateLocalStorage();
updateCartPopup();
}

function updateCartIcon() {
var itemCountElement = document.getElementById('item-count');
itemCountElement.textContent = itemCount;
}

function updateLocalStorage() {
localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

function openCart() {
updateCartPopup();
var cartPopup = document.getElementById('cart-popup');
cartPopup.style.display = 'block';
}

function closeCart() {
var cartPopup = document.getElementById('cart-popup');
cartPopup.style.display = 'none';
}

function updateCartPopup() {
var cartItemsElement = document.getElementById('cart-items');
var totalElement = document.getElementById('total');

cartItemsElement.innerHTML = '';

if (cartItems.length === 0) {
  cartItemsElement.textContent = 'Cart is empty.';
  totalElement.textContent = 'Total: R0.00';
} else {
  var totalPrice = 0;

  cartItems.forEach(function(item, index) {
    var cartItemElement = document.createElement('div');
    cartItemElement.classList.add('cart-item');

    var productImageElement = document.createElement('img');
    productImageElement.src = item.image;
    productImageElement.alt = item.name;

    var productNameElement = document.createElement('span');
    productNameElement.textContent = item.name;

    var itemPriceElement = document.createElement('span');
    itemPriceElement.textContent = 'R' + (item.price * item.quantity).toFixed(2);

    var itemQuantityElement = document.createElement('span');
    itemQuantityElement.textContent = 'x' + item.quantity;

    var removeButtonElement = document.createElement('button');
    removeButtonElement.textContent = 'Remove';
    removeButtonElement.addEventListener('click', function() {
      removeFromCart(index);
    });

    cartItemElement.appendChild(productImageElement);
    cartItemElement.appendChild(productNameElement);
    cartItemElement.appendChild(itemPriceElement);
    cartItemElement.appendChild(itemQuantityElement);
    cartItemElement.appendChild(removeButtonElement);
    cartItemsElement.appendChild(cartItemElement);

    totalPrice += item.price * item.quantity;
  });

  totalElement.textContent = 'Total: R' + totalPrice.toFixed(2);
}
}

function removeFromCart(index) {
var removedItem = cartItems.splice(index, 1)[0];
itemCount -= removedItem.quantity;
updateCartIcon();
updateLocalStorage();
updateCartPopup();
}
  </script>





</body>
</html>