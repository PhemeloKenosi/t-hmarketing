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
            <form>
              <label for="search-input"><i class="fas fa-search"></i></label>
              <input type="text" id="search-input" placeholder="Search...">
              <button type="submit">Search</button>
            </form>
          </div>
       
       

      

        <section class="navigation w3-metro-light-blue w3-container">
            <button onclick="goToTop()" id="back-to-top" title="Go to top"><i class="fa fa-toggle-up"></i></button>
            <nav class="nav-container">
               
                <div class="logo">
                    <a href="index.html">
                         <img src="img\Black_and_White_Round_Fashion_Monogram_Logo-removebg-preview.png" alt="Logo" width="180px" height="180px">
        
                    </a>
                </div>

                
                

              <div class="mobile-button">
                <span style="float: right;" onclick="toggleMobileNavigation()">&#9776;</span>
              </div>
              <div class="links">
                <a href="#home">Login |</a>
                <a href="#about" >Register |</a>
                <a href="#team" >Orders |</a>

                <i class="fa-solid fa-user fa-2xl" style="color:rgb(10, 120, 216);"></i><span><a href="" target="_blank" style="text-decoration: none;"></a></span><br>

                
                <i class="fa-solid fa-heart fa-2xl" style="color:pink;"></i>
                <i class="fa-solid fa-cart-shopping fa-2xl" style="color:rgb(77, 187, 77)"></i>  
              </div>
              <div id="mobile-sidenav" class="mobile-links w3-sand">
                <a href="javascript:void(0)" class="closebtn w3-round" onclick="toggleMobileNavigation()">&times;</a>
                <a href="#Login" onclick="toggleMobileNavigation()">Login</a>
                <a href="#Register" onclick="toggleMobileNavigation()">Register</a>
                <a href="#Order" onclick="toggleMobileNavigation()">Orders</a>
                <a href="#My Account" onclick="toggleMobileNavigation()">My Account</a>
                <a href="#Wish List" onclick="toggleMobileNavigation()">Wish List</a>
                <a href="#Cart" onclick="toggleMobileNavigation()">Cart</a>
              </div>


            
            </nav>
          </section>



        </header>


        <main>
            <section id="products">
        
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
        
                        <a href="product7.php" class="link_product7">
                            <div class="product-card">
                            <img src="img/Kenmont_winter_outdoor_cap_with_ear_flap-removebg-preview.jpg" alt="Product 7">
                            <h3>Kermont Winter Outdoor Cap With Ear Flap</h3>
                            <p class="price">R700.00</p>
                            <p class="rating">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                          </div>
                        </a>
        
                        <a href="product8.php" class="link_product8">
                            <div class="product-card">
                            <img src="img/Irish_Hanna_hat_men_donegal_8_piece-removebg-preview.jpg" alt="Product 8">
                            <h3>Irish Hanna Hat Donegal 8 piece</h3>
                            <p class="price">R600.00</p>
                            <p class="rating">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                          </div>
                        </a>
        
                        <a href="product9.php" class="link_product8">
                            <div class="product-card">
                            <img src="img/Product_15_-_Hanna_Hat_Donegal-removebg-preview (1).jpg" alt="Product 9">
                            <h3>Hanna Hat Donegal</h3>
                            <p class="price">R600.00</p>
                            <p class="rating">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                          </div>
                        </a>

                        <a href="product10.php" class="link_product8">
                            <div class="product-card">
                            <img src="img/Product_16_-_Hanna_JP_Cap_Charcoal-removebg-preview.jpg" alt="Product 9">
                            <h3>Hanna JP Cap</h3>
                            <p class="price">R700.00</p>
                            <p class="rating">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                          </div>
                        </a>

                        <a href="product11.php" class="link_product8">
                            <div class="product-card">
                            <img src="img/Product_12_-_Wigens_Wool_Baseball_Cap_with_EarFlaps-removebg-preview.jpg" alt="Product 9">
                            <h3>Wigens Wool Baseball Cap With Ear Flaps</h3>
                            <p class="price">R500.00</p>
                            <p class="rating">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                          </div>
                        </a>

                        <a href="product12.php" class="link_product8">
                            <div class="product-card">
                            <img src="img/Product_9_-_Fiddler_Cap-removebg-preview.jpg" alt="Product 9">
                            <h3>Fiddlen Cap</h3>
                            <p class="price">R500.00</p>
                            <p class="rating">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                          </div>
                        </a>
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
                
    </body>
</html>
