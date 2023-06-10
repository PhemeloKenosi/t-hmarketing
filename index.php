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
    <!-- <script src="script.js"></script> -->

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
                <a href="#Cart" onclick="toggleMobileNavigation()">Cart</a>
              </div>


            
            </nav>
          </section>



        </header>


<header class="header">
    <h1>TOP YOUR STYLE WITH OUR CAPS</h1>
  </header>
  
  <section class="hero-section">
    <div class="hero-content">
      <h1>New Product Launch</h1>
      <p>Discover the latest and greatest product for your needs!</p>
      <a href="allproduct.html" class="cta-button">Shop Now</a>
    </div>
  </section>


  <main>
    <section id="products">

        <h1 class="caps">Our range of Caps</h1>

                <div class="product-grid">
                <a href="product1.php" class="link_product1">
                <div class="product-card">
                    <img src="img/Product_1_-_Hanna_Irish_Cap-removebg-preview.jpg" alt="Product 1">
                    <h3>Grey Hanna Irish Cap</h3>
                    <p class="price">R800.00</p>
                    <p class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                  </div>
                 </a>

                 
            
                <a href="product2.php" class="link_product2">
                <div class="product-card">
                    <img src="img/Hanna_hat_herringbone-removebg-preview.jpg" alt="Product 2">
                    <h3>Hanna Hat Herringbone</h3>
                    <p class="price">R500.00</p>
                    <p class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                  </div>

                </a>

                <a href="product3.php" class="link_product3">
                <div class="product-card">
                    <img src="img/Product_3_-_Hanna_Irish_Flat_Cap_for_Men-removebg-preview.jpg" alt="Product 3">
                    <h3>Irish Flat Cap</h3>
                    <p class="price">R750.00</p>
                    <p class="rating">&#9733;&#9733;&#9734;&#9734;&#9734;</p>
                  </div>
                </a>
                
           
                <a href="product4.php" class="link_product4">
                <div class="product-card">
                    <img src="img/Product_4_-_Newsboy_Cap_for_Men-removebg-preview.jpg" alt="Product 4">
                    <h3>Hanna Newsboy Cap</h3>
                    <p class="price">R750.00</p>
                    <p class="rating">&#9733;&#9734;&#9734;&#9734;&#9734;</p>
                  </div>
                </a>
          

                <a href="product5.php" class="link_product5">
                    <div class="product-card">
                        <img src="img/hanna_hat_-_Product_16-removebg-preview.jpg" alt="Product 5">
                        <h3>Irish Multicoloured Patchwork Hanna Hat</h3>
                        <p class="price">R500.00</p>
                        <p class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                      </div>
                </a>
           
                <a href="product6.php" class="link_product6">
                <div class="product-card">
                <img src="img/Warm_black_trapper_hat-removebg-preview.jpg" alt="Product 6">
                <h3>Warm Trapper Hat With Ear Flaps</h3>
                <p class="price">R670.00</p>
                <p class="rating">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
              </div>
                </a>
          </div>
    </section>

                <a href="allproduct.php" class="view-all-button">View All</a>

  </main>


  <section>

    <h1 class="title-hanna">Get yourself a Hanna Hat</h1>

      <div class="grid-container">
        <div class="grid-item">
          <img src="img/Model Wearing a Cap.jpeg" alt="Image">
        </div>
        <div class="grid-item">
          
          <div class="description">
            <p>
                Hanna Hats is known for its unique designs that are cut to patterns designed by the company and assembled by hand at their workshop. Here are some more details about Hanna Hats:
            </p>   

            <ul>

                <li>
                    
                    <b>Materials:</b> Hanna Hats only uses authentic, locally sourced materials including Irish tweed, Harris tweed, and Irish linens to make their caps and hats.
                </li>

                <li>
                    
                    <b>Products:</b> Hanna Hats offers a wide range of caps and hats for men and women, including flat caps, newsboy caps, bucket hats, and more.
                </li>

                <li>
                   
                    <b>Tradition:</b> Each hat or cap is worked minutely with full respect for tradition. The company's commitment to tradition ensures that every cap or hat is unique and of the highest quality.
                </li>

                <li>
                    
                    <b>Timeless designs:</b> Hanna Hats' caps are timeless and modern at the same time. They are reflective of the rugged landscape of Donegal and the rich history of Irish textiles.
                </li>

                <li>
                    <b>Handcrafted:</b> All of Hanna Hats' styles are cut to patterns designed by the company and assembled by hand at their workshop.
                </li>

            </ul>
        </div>
        </div>
      </div>

  </section>


  <section>
    <h1 class="discover-more">Discover more</h1>
 <div class="card-container">
 
  <div class="card-1">
    <div class="card-content">
      <h3>Irish Hanna Caps</h3>
      <button class="discover-more-button">Discover more</button>
    </div>
  </div>
  
  <div class="card-2">
    <div class="card-content">
      <h3>Irish Hanna Hats</h3>
      <button class="discover-more-button">Discover more</button>
    </div>
  </div>
  
  <div class="card-3">
    <div class="card-content">
      <h3>Warm Caps With Ear Flaps</h3>
      <button class="discover-more-button">Discover more</button>
    </div>
  </div>

 </div>
    
    
  </section>




  <section class="testimonials" style="padding: 50px;">
    <h2 style="text-align: center;">- What our Customers are Saying -</h2>
    <div class="slideshow-container">

    <div class="mySlides">
      <p><q><em>The team at CONSULTCORP boosted my business by 500% in only 6 months! Their expertise helped me and my business to grow beyond what I thought it is possible.</em></q></p>
      <p class="author"><strong>- John Keats, Founder of COMPANY-X</strong></p>
    </div>

    <div class="mySlides">
      <p><q><em>CONSULTCORP helped me launch my idea in only 3 months! If there was not for CONSULTCORP team, I would probably not succeed.</em></q></p>
      <p class="author"><strong>- Anne Johnson, Founder of COMPANY-Y</strong></p>
    </div>

    <div class="mySlides">
      <p><q><em>The team at CONSULTCORP will help you steer your idea in the right direction, reducing all the risks you might encounter on your own! They surely did mine.</em></q></p>
      <p class="author"><strong>- Dean Doe, Founder of COMPANY-Z</strong></p>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    </div>

    <div class="dot-container">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>      
  </section>







 <section class="newsletter">
  <div class="newsletter-content">
    <h2>Stay in the Know</h2>
    <p> Subscribe to the Hanna Hats mailing list to hear first about exclusive offers and forthcoming collections.</p>
    <form class="newsletter-form" action="your-form-action-url" method="POST">
      <input type="email" name="email" placeholder="Enter your email" required>
      <button type="submit">Subscribe</button>
    </form>
  </div>
</section>





<footer class="footer">
  <div class="container">
    <div class="footer-columns">
      <div class="footer-column">
        <h3>Contact Us</h3>
        <div class="contact-section">
          <p><b>Email:</b> info@hannamarketing.com</p>
          <p><b>Phone:</b> 073 353 5583</p>
        </div>
        <h3>Follow Us</h3>
        <div class="social-media-icons">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
        <p>© 2023 - Hanna Marketing - All rights reserved</p>
      </div>
      <div class="footer-column">
        <h3>About Us</h3>
        <div class="about-section">
          <p>
            Hanna Hats is a family-owned and operated business that has been making handcrafted hats in Donegal, Ireland since 1924. The company was founded by David Hanna Sr., who started out as a bespoke tailor. In the early 1960s, he transitioned into hat making and Hanna Hats was born
          </p>
        </div>
      </div>
      <div class="footer-column">
        <h3>More About</h3>
        <div class="sitemap-section">
          <ul>
            <li><a href="#">Orders</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Terms and Conditions</a></li>
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





  <div class="cart-popup" id="cart-popup">
    <h1 style="text-align: center;">Shopping Cart</h1>
    <div class="cart-items" id="cart-items"></div>
    <div class="total" id="total">Total: $0.00</div>
    <button onclick="closeCart()">Close</button>
</div>



<script>


// Adding Password visibility
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var passwordToggle = document.querySelector(".password-toggle i");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      passwordToggle.classList.remove("fa-eye");
      passwordToggle.classList.add("fa-eye-slash");
    } else {
      passwordInput.type = "password";
      passwordToggle.classList.remove("fa-eye-slash");
      passwordToggle.classList.add("fa-eye");
    }
  }

</script>

  <script async>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }

</script>


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





