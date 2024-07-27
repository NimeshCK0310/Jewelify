<?php
session_start();

if (!isset($_SESSION['username'])) {
    
    exit();
}

$username = $_SESSION['username'];
?>

   <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jewelify</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">
  <link rel="stylesheet" href="Home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+NZ:wght@100..400&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>


  <div class="overlay" data-overlay></div>

  <!-- MODAL -->
  

  <div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe Newsletter.</h3>

            <p class="newsletter-desc">
              Subscribe the <b>Jewelify</b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>



<!-- Notifcation -->

<div class="notification-toast" data-toast>

  <button class="toast-close-btn" data-toast-close>
    <ion-icon name="close-outline"></ion-icon>
  </button>

  <div class="toast-banner">
    <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
  </div>

  <div class="toast-detail">

    <p class="toast-message">
      Someone in new just bought
    </p>

    <p class="toast-title">
      Rose Gold Earrings
    </p>

    <p class="toast-meta">
      <time datetime="PT2M">2 Minutes</time> ago
    </p>

  </div>

</div>
 
  <!-- HEADER -->

    <!-- <header>

      <div class="header-top">
  
        <div class="container">
  
          <ul class="header-social-container">
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>
  
          </ul>
  
          <div class="header-alert-news">
            <p>
              <b>Free Shipping</b>
              This Week Order Over - $55
            </p>
          </div>
  
          <div class="header-top-actions">
  
            <select name="currency">
  
              <option value="usd">USD &dollar;</option>
              <option value="eur">EUR &euro;</option>
  
            </select>
  
            <select name="language">
  
              <option value="en-US">English</option>
              <option value="es-ES">Espa&ntilde;ol</option>
              <option value="fr">Fran&ccedil;ais</option>
  
            </select>
  
          </div>
  
        </div>
  
      </div>
  
      <div class="header-main">
  
        <div class="container">
  
          <a href="#" class="header-logo">
            <img src="./assets/images/logo/logo.svg" alt="Anon's logo" width="120" height="36">
          </a>
  
          <div class="header-search-container">
  
            <input type="search" name="search" class="search-field" placeholder="Enter your product name...">
  
            <button class="search-btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>
  
          </div>
  
          <div class="header-user-actions">
  
            <button class="action-btn">
              <ion-icon name="person-outline"></ion-icon>
            </button>
  
            <button class="action-btn">
              <ion-icon name="heart-outline"></ion-icon>
              <span class="count">0</span>
            </button>
  
            <button class="action-btn">
              <ion-icon name="bag-handle-outline"></ion-icon>
              <span class="count">0</span>
            </button>
  
          </div>
  
        </div>
  
      </div>
  
      <nav class="desktop-navigation-menu">
  
        <div class="container">
  
          <ul class="desktop-menu-category-list">
  
            <li class="menu-category">
              <a href="#" class="menu-title">Home</a>
            </li>
  
            <li class="menu-category">
              <a href="#" class="menu-title">Categories</a>
  
              <div class="dropdown-panel">
  
                <ul class="dropdown-panel-list">
  
                  <li class="menu-title">
                    <a href="#">Electronics</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Desktop</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Laptop</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Camera</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Tablet</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Headphone</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">
                      <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection" width="250"
                        height="119">
                    </a>
                  </li>
  
                </ul>
  
                <ul class="dropdown-panel-list">
  
                  <li class="menu-title">
                    <a href="#">Men's</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Formal</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Casual</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Sports</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Jacket</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Sunglasses</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">
                      <img src="./assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
                    </a>
                  </li>
  
                </ul>
  
                <ul class="dropdown-panel-list">
  
                  <li class="menu-title">
                    <a href="#">Women's</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Formal</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Casual</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Perfume</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Cosmetics</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Bags</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">
                      <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
                    </a>
                  </li>
  
                </ul>
  
                <ul class="dropdown-panel-list">
  
                  <li class="menu-title">
                    <a href="#">Electronics</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Smart Watch</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Smart TV</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Keyboard</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Mouse</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">Microphone</a>
                  </li>
  
                  <li class="panel-list-item">
                    <a href="#">
                      <img src="./assets/images/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
                    </a>
                  </li>
  
                </ul>
  
              </div>
            </li>
  
            <li class="menu-category">
              <a href="#" class="menu-title">Men's</a>
  
              <ul class="dropdown-list">
  
                <li class="dropdown-item">
                  <a href="#">Shirt</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Shorts & Jeans</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Safety Shoes</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Wallet</a>
                </li>
  
              </ul>
            </li>
  
            <li class="menu-category">
              <a href="#" class="menu-title">Women's</a>
  
              <ul class="dropdown-list">
  
                <li class="dropdown-item">
                  <a href="#">Dress & Frock</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Earrings</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Necklace</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Makeup Kit</a>
                </li>
  
              </ul>
            </li>
  
            <li class="menu-category">
              <a href="#" class="menu-title">Jewelry</a>
  
              <ul class="dropdown-list">
  
                <li class="dropdown-item">
                  <a href="#">Earrings</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Couple Rings</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Necklace</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Bracelets</a>
                </li>
  
              </ul>
            </li>
  
            <li class="menu-category">
              <a href="#" class="menu-title">Perfume</a>
  
              <ul class="dropdown-list">
  
                <li class="dropdown-item">
                  <a href="#">Clothes Perfume</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Deodorant</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Flower Fragrance</a>
                </li>
  
                <li class="dropdown-item">
                  <a href="#">Air Freshener</a>
                </li>
  
              </ul>
            </li>
  
            <li class="menu-category">
              <a href="#" class="menu-title">Blog</a>
            </li>
  
            <li class="menu-category">
              <a href="#" class="menu-title">Hot Offers</a>
            </li>
  
          </ul>
  
        </div>
  
      </nav>
  
      <div class="mobile-bottom-navigation">
  
        <button class="action-btn" data-mobile-menu-open-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>
  
        <button class="action-btn">
          <ion-icon name="bag-handle-outline"></ion-icon>
  
          <span class="count">0</span>
        </button>
  
        <button class="action-btn">
          <ion-icon name="home-outline"></ion-icon>
        </button>
  
        <button class="action-btn">
          <ion-icon name="heart-outline"></ion-icon>
  
          <span class="count">0</span>
        </button>
  
        <button class="action-btn" data-mobile-menu-open-btn>
          <ion-icon name="grid-outline"></ion-icon>
        </button>
  
      </div>
  
      <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>
  
        <div class="menu-top">
          <h2 class="menu-title">Menu</h2>
  
          <button class="menu-close-btn" data-mobile-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>
  
        <ul class="mobile-menu-category-list">
  
          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>
  
          <li class="menu-category">
  
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Men's</p>
  
              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
              </div>
            </button>
  
            <ul class="submenu-category-list" data-accordion>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Shirt</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Shorts & Jeans</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Safety Shoes</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Wallet</a>
              </li>
  
            </ul>
  
          </li>
  
          <li class="menu-category">
  
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Women's</p>
  
              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
              </div>
            </button>
  
            <ul class="submenu-category-list" data-accordion>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Dress & Frock</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Earrings</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Necklace</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Makeup Kit</a>
              </li>
  
            </ul>
  
          </li>
  
          <li class="menu-category">
  
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Jewelry</p>
  
              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
              </div>
            </button>
  
            <ul class="submenu-category-list" data-accordion>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Earrings</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Couple Rings</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Necklace</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Bracelets</a>
              </li>
  
            </ul>
  
          </li>
  
          <li class="menu-category">
  
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Perfume</p>
  
              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
              </div>
            </button>
  
            <ul class="submenu-category-list" data-accordion>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Clothes Perfume</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Deodorant</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Flower Fragrance</a>
              </li>
  
              <li class="submenu-category">
                <a href="#" class="submenu-title">Air Freshener</a>
              </li>
  
            </ul>
  
          </li>
  
          <li class="menu-category">
            <a href="#" class="menu-title">Blog</a>
          </li>
  
          <li class="menu-category">
            <a href="#" class="menu-title">Hot Offers</a>
          </li>
  
        </ul>
  
        <div class="menu-bottom">
  
          <ul class="menu-category-list">
  
            <li class="menu-category">
  
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Language</p>
  
                <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
              </button>
  
              <ul class="submenu-category-list" data-accordion>
  
                <li class="submenu-category">
                  <a href="#" class="submenu-title">English</a>
                </li>
  
                <li class="submenu-category">
                  <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                </li>
  
                <li class="submenu-category">
                  <a href="#" class="submenu-title">Fren&ccedil;h</a>
                </li>
  
              </ul>
  
            </li>
  
            <li class="menu-category">
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Currency</p>
                <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
              </button>
  
              <ul class="submenu-category-list" data-accordion>
                <li class="submenu-category">
                  <a href="#" class="submenu-title">USD &dollar;</a>
                </li>
  
                <li class="submenu-category">
                  <a href="#" class="submenu-title">EUR &euro;</a>
                </li>
              </ul>
            </li>
  
          </ul>
  
          <ul class="menu-social-container">
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>
  
          </ul>
  
        </div>
  
      </nav>
  
    </header> -->

    <header>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <a href="#" class="logo">Jewelify</a>
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">10</span>
          </button>

          <button class="action-btn">
            <a href="../Cart/cart2.html">
            <ion-icon name="cart"></ion-icon>
            <span class="count">2</span>
          </button>

          <button class="action-btn">
            <a href="signin.html" class="sign-in">
              <ion-icon name="person-circle-outline"></ion-icon>
            </a>
          </button>

          Welcome <?php echo htmlspecialchars($username); ?>...!


        </div>

      </div>

    </div>

    

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">
        
          <li class="menu-category">
            <a href="Home.html" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Jewellery</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="../Rings/ring.html">Rings</a>
                </li>

                <li class="panel-list-item">
                  <a href="../Bluesapphire-Ring/blue-sapphire.html">Blue Sapphire Rings</a>
                </li>

                <li class="panel-list-item">
                  <a href="../Diamond-Ring/diamond.html">Diamond Rings</a>
                </li>

                <li class="panel-list-item">
                  <a href="../Stackable-Ring/stackable.html">Stackable Rings</a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="../pendants/pendants.html">Pendants</a>
                </li>

                <li class="panel-list-item">
                  <a href="../ColoredPendant/Colpend.html">Coloured Stone Pendants</a>
                </li>

                <li class="panel-list-item">
                  <a href="../DiamondPendant/diampend.html">Diamonds</a>
                </li>


              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="../Earrings/Earrings.html">Earrings</a>
                </li>

                <li class="panel-list-item">
                  <a href="../StudEarrings/Studear.html">Stud Earrings</a>
                </li>

                <li class="panel-list-item">
                  <a href="../HangingEar/Hangear.html">Hanging Earrings</a>
                </li>

                <li class="panel-list-item">
                  <a href="../DiamondEar/Diamondear.html">Diamond Earrings</a>
                </li>

                <li class="panel-list-item">
                  <a href="../ColoredStoneEar/Coloredear.html">Coloured Stones Earrings</a>
                </li>


              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="../Necklace/necklace.html">Necklaces</a>
                </li>

                <li class="menu-title">
                  <a href="../Cufflink/cufflinks.html">CUFFLINKS</a>
                </li>

                <li class="menu-title">
                  <a href="../Bracelet/bracelets.html">BANGLES & BRACELETS</a>
                </li>

              </ul>

            </div>
          </li>
        
          <li class="menu-category">
            <a href="#" class="menu-title">About us</a>
          </li>
        
          <li class="menu-category">
            <a href="#" class="menu-title">Reviews</a>
          </li>
        
          <li class="menu-category">
            <a href="#" class="menu-title">Contact us</a>
          </li>
        
        </ul>

      </div>

    </nav>

  </header>

<!-- Main -->

  <main>

    <!-- Banner @ Video -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <div class="video-container">
              <video autoplay muted loop>
                  <source src="../Home-Images/video.mp4" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
          </div>

            <div class="banner-content">

              <p class="banner-subtitle">Trending items</p>

              <h2 class="banner-title">Women's & Men's latest Jewellery sale</h2>

              <p class="banner-text">
                starting at &dollar; <b>15</b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/jewe1.jpg" alt="modern Jewellery" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending accessories</p>

              <h2 class="banner-title">Modern Jewellery</h2>

              <p class="banner-text">
                starting at &dollar; <b>10</b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/jewe2.jpg" alt="new Jewellery summer sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Sale Offers</p>

              <h2 class="banner-title">New Jewellery summer sale</h2>

              <p class="banner-text">
                starting at &dollar; <b>19</b>.99
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

        </div>

      </div>

    </div>


    <!-- PRODUCT -->
  

    <div class="product-container">

      <div class="container">


   <!-- Best Sellers -->
        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Best Sellers</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <div class="showcase-wrapper">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/jewellery-2.jpg" alt="Women's Rings" width="75" height="75"
                      class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">women's rings</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>60,000.00</del>
                      <p class="price">45,000.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/jewellery-3.jpg" alt="men's hoodies t-shirt" class="showcase-img"
                      width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Necklace</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>150,000.00</del>
                      <p class="price">120,000.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/jewellery-4.jpg" alt="girls t-shirt" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Girls Earings</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>70,000.00</del>
                      <p class="price">50,000.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/watch-2.jpg" alt="woolen hat for men" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Men's Watch</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>120,000.00</del>
                      <p class="price">100,000.50</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>

         

          </div>

        </div>



        <div class="product-box">


 <!-- PRODUCT MINIMAL -->
  

<!-- PRODUCT FEATURED -->
          

          <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="./assets/images/products/daydeal.jpg" alt="Bridal Jewellery Set" class="showcase-img" >
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">Bridal Jewellery Set</h3>
                    </a>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">200,000.00</p>

                      <del>220,000.00</del>
                    </div>

                    <button class="add-cart-btn">Add to Cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">60</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">
              
                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                  </div>
              
                  <div class="showcase-content">
              
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
              
                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Rose Gold diamonds Earring</a>
                    </h3>
              
                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>
              
                    <div class="price-box">
                      <p class="price">90,000.00</p>
                      <del>120,000.00</del>
                    </div>
              
                    <button class="add-cart-btn">add to cart</button>
              
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> already sold: <b>15</b> </p>
              
                        <p> available: <b>60</b> </p>
                      </div>
              
                      <div class="showcase-status-bar"></div>
                    </div>
              
                    <div class="countdown-box">
              
                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>
              
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">150</p>
                          <p class="display-text">Days</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">14</p>
                          <p class="display-text">Hours</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">39</p>
                          <p class="display-text">Min</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
              
                    </div>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>

  
<!-- PRODUCT GRID -->
      

          <div class="product-main">

            <h2 class="title">New Products</h2>

            <div class="product-grid">

              <div class="showcase">

                <div class="showcase-banner">

                  <a href="../Rings/ring.html">
                  <img src="../Home-Images/frontring.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="../Home-Images/frontring.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover"></a>

                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="../Rings/ring.html" class="showcase-category">Rings</a>

                  <a href="#">
                    <h3 class="showcase-title">Men & Women rings</h3>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">148,000.00</p>
                    <del>175,000.00</del>
                  </div>

                </div>

              </div>

              <div class="showcase">
              
                <div class="showcase-banner">

                  <a href="../Necklace/necklace.html">
                  <img src="../Home-Images/frontneck.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default"
                    width="300">
                  <img src="../Home-Images/frontneck.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover"
                    width="300">
                  </a>
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="../Necklace/necklace.html" class="showcase-category">Necklaces</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Stylish Jewellery</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">245,000.00</p>
                    <del>256,000.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">

                  <a href="../Earrings/Earrings.html">
                  <img src="../Home-Images/frontear.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default"
                    width="300">
                  <img src="../Home-Images/frontear.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover"
                    width="300">
                    </a>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="../Earrings/Earrings.html" class="showcase-category">Earings</a>
              
                  <h3>
                    <a href="#" class="showcase-title">MEN & Women Earings</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">58,000.00</p>
                    <del>65,000.00</del>
                  </div>
              
                </div>
              
              </div>


              <div class="showcase">
              
                <div class="showcase-banner">

                  <a href="../pendants/pendants.html">
                  <img src="../Home-Images/frontpend.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default"
                    width="300">
                  <img src="../Home-Images/frontpend.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle pink">new</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="../pendants/pendants.html" class="showcase-category">Pendants</a>
              
                  <h3>
                    <a href="#" class="showcase-title">New Designs of Pendants</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">125,000.00</p>
                    <del>135,000.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">

                  <a href="../Bracelet/diambangles.html">
                  <img src="../Home-Images/frontbrace.jpg" alt="Casual Men's Brown shoes" class="product-img default"
                    width="300">
                  <img src="../Home-Images/frontbrace.jpg" alt="Casual Men's Brown shoes" class="product-img hover"
                    width="300">
                    </a>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="../Bracelet/diambangles.html" class="showcase-category">Bangles</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Variety of Bangles</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">199,000.00</p>
                    <del>255,000.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">

                  <a href="../Bracelet/diambangles.html">
                  <img src="../Home-Images/frontbracelet.jpg" alt="Pocket Watch Leather Pouch" class="product-img default"
                    width="300">
                  <img src="../Home-Images/frontbracelet.jpg" alt="Pocket Watch Leather Pouch" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Bracelets</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Stylish Bracelets</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">150,000.00</p>
                    <del>170,000.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">

                  <a href="../Cufflink/cufflinks.html">
                  <img src="../Home-Images/frontcuff.jpg" alt="Smart watche Vital Plus" class="product-img default"
                    width="300">
                  <img src="../Home-Images/frontcuff.jpg" alt="Smart watche Vital Plus" class="product-img hover" width="300">
                  </a>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="../Cufflink/cufflinks.html" class="showcase-category">cufflinks</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Colourful Cufflinks</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">50,000.00</p>
                    <del>70,000.00</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">

                  <a href="#">
                  <img src="../Home-Images/fronthairor.jpg" alt="Smart watche Vital Plus" class="product-img default"
                    width="300">
                  <img src="../Home-Images/fronthairor.jpg" alt="Smart watche Vital Plus" class="product-img hover" width="300">
                  </a>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Hair Ornaments</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Colourful Hair Ornaments</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">50,000.00</p>
                    <del>70,000.00</del>
                  </div>
              
                </div>
              
              </div>

              

              <diiv>

              <div class=iv>

            </div>

          </div>

        </div>

      </div>

    </div>





    
<!-- TESTIMONIALS, CTA & SERVICE -->
    

    <div>

      <div class="container">

        <div class="testimonials-box">

          
<!-- TESTIMONIALS -->
          

          <div class="testimonial">

            <h2 class="title">Testimonial</h2>

            <div class="testimonial-card">

              <img src="./assets/images/testimnial-1.jpeg" alt="alan doe" class="testimonial-banner" width="100" height="100">

              <p class="testimonial-name">Senesh</p>

              <p class="testimonial-title">CEO & Founder Invision</p>

              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>

            </div>

          </div>



          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="./assets/images/SummerJwe.jpeg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Starting @ $10</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
            - SERVICE
          -->

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>

              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">SL Orders Only</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">20% money back</h3>
                  <p class="service-desc">For Order Over $100</p>
              
                </div>
              
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>
    <!-- Blogs Packages  -->
    

    <div class="blog">

      <div class="container">

        <div class="blog-container has-scrollbar">

          <div class="blog-card">

            <a href="../Wedding-Jewellary/wedding.html">
              <img src="../Home-Images/wedcover.jpg" alt="wedcover" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="../Wedding-Jewellary/wedding.html" class="blog-title1"><h3>Wedding Jewellery</h3></a>

              <a href="../Wedding-Jewellary/wedding.html">
                <h3 class="blog-title">Say I do, as you have always dreamt with bridal
                  jewellery and wedding rings for Her and Him,
                  where every piece is designed to complement your special day.</h3>
              </a>

              <p class="blog-meta">
                <input type="button" value="Explore more" name="button" class="button1" onclick="window.location.href='../Wedding-Jewellary/wedding.html'">
              </p>

            </div>

          </div>

          <div class="blog-card">

            <a href="#">
              <img src="../Home-Images/customize.jpg" alt="wedcover" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-title1"><h3>Customize Unique Design</h3></a>

              <a href="#">
                <h3 class="blog-title">Say I do, as you have always dreamt with bridal
                  jewellery and wedding rings for Her and Him,
                  where every piece is designed to complement your special day.</h3>
              </a>

              <p class="blog-meta">
                <input type="button" value="Explore more" name="button" class="button1" onclick="window.location.href='#'">
              </p>

            </div>

          </div>


          

          <div class="blog-card">

            <a href="#">
              <img src="../Home-Images/testi1.jpg" alt="Testimonials" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-title1"><h3>Testimonials</h3></a>

              <a href="#">
                <h3 class="blog-title">Say I do, as you have always dreamt with bridal
                  jewellery and wedding rings for Her and Him,
                  where every piece is designed to complement your special day.</h3>
              </a>

              <p class="blog-meta">
                <input type="button" value="Explore more" name="button" class="button1" onclick="window.location.href='#'">
              </p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>

  <!-- <div class="b7">
    <div class="b6"><br><br><br><img src="../Home-Images/about us.jpg" class="image7"></div>
    <p class="d7">About us</p>
    <p class="d8">Driven by a deep love of jewellery making and the power of storytelling through artistry and modern technology, we are dedicated to<br>
        crafting exquisite luxury jewels that serves as a canvas for the world's finest gemstones and diamonds.</p>
    <br>
    <center><input type="button" value="Explore more" name="button" class="button3"></center>
    <br><br><br>
    </div>
    </div> -->




<!-- Footer -->

  <footer>

        <div class="footer-nav">

          <div class="footer-container">
    
              <ul class="footer-nav-list">
    
                <li class="footer-nav-item">
                  <h2 class="nav-title">Jewellery</h2>
                </li>
      
                <li class="footer-nav-item">
                  <a href="../Earrings/Earrings.html" class="footer-nav-link">Earings</a>
                </li>
      
                <li class="footer-nav-item">
                  <a href="../pendants/pendants.html" class="footer-nav-link">Pendants</a>
                </li>
      
                <li class="footer-nav-item">
                  <a href="../Rings/ring.html" class="footer-nav-link">Rings</a>
                </li>
      
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">Bracelets & Bangles</a>
                </li>
      
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">Necklaces</a>
                </li>
      
              </ul>


              <ul class="footer-nav-list">
    
                <li class="footer-nav-item">
                  <h2 class="nav-title">Services</h2>
                </li>
      
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">Size Guide</a>
                </li>
      
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">Shipping</a>
                </li>
      
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">Personalization</a>
                </li>
      
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">Book an appointment</a>
                </li>
      
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">Contact us</a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">Return an Exchanges</a>
                </li>
      
              </ul>
              
              <div class="footer-column">
                  <h3>Subscribe to Our Newsletter</h3>
                  <p>Discover the latest collections, news and exclusive launches</p>
                  <form action="#">
                      <input type="email" placeholder="Your Email Address...">
                      <button type="submit">></button>
                  </form>
                  <div class="social-media">
                    <ul class="menu-social-container">
    
                      <li>
                        <a href="#" class="social-link">
                          <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                      </li>
            
                      <li>
                        <a href="#" class="social-link">
                          <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                      </li>
            
                      <li>
                        <a href="#" class="social-link">
                          <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                      </li>
            
                      <li>
                        <a href="#" class="social-link">
                          <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                      </li>
            
                    </ul>
                  </div>
              </div>
          </div>
     
    </div>

     
  <div class="footer-bottom">

    <div class="container">

      <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

      <p class="copyright">
        Copyright &copy; <a href="#">Jewelify</a> all rights reserved.
      </p>

    </div>

  </div>

  </footer>



  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>






            <!-- <div class="b7">
            <div class="b6"><br><br><br><img src="../Home-Images/about us.jpg" class="image7"></div>
            <p class="d7">About us</p>
            <p class="d8">Driven by a deep love of jewellery making and the power of storytelling through artistry and modern technology, we are dedicated to<br>
                crafting exquisite luxury jewels that serves as a canvas for the world's finest gemstones and diamonds.</p>
            <br>
            <center><input type="button" value="Explore more" name="button" class="button3"></center>
            <br><br><br>
            </div>
            </div> -->
            

            
