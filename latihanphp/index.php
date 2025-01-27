<?php
  // Menampilkan tanggal saat ini
  $currentDate = date("l, F j, Y");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="miki.css" />


    <title>Web Design Mastery | TravelDream</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#" class="logo">MAHA RA<span>JA BHUMI</span></a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#service">Services</a></li>
        <li><a href="#destination">Destinations</a></li>
        <li><a href="#package">Packages</a></li>
        <li><a href="#client">Clients</a></li>
        <li><a href="login.php"><button class="login-button">Login</button></a></li>
      </ul>
    </nav>
    <header class="header" id="home">
      <div class="section__container header__container">
        <h1>MAHA RAJA<br /><span>BHUMI.</span></h1>
        <p>Live your best moments</p>
        <form action="/">
          <div class="input__group">
            <span><i class="ri-map-2-fill"></i></span>
            <input type="text" placeholder="Where are you going?" />
          </div>
          <div class="input__group">
            <span><i class="ri-map-pin-2-fill"></i></span>
            <input type="text" placeholder="Location" />
          </div>
          <div class="input__group">
            <span><i class="ri-list-ordered-2"></i></span>
            <input type="text" placeholder="Tour type" />
          </div>
          <div class="input__group">
            <button class="btn">Search</button>
          </div>
        </form>
      </div>
    </header>

  
    <section class="date-section">
      <div class="section__container">
        <h3>Today's Date: <?php echo $currentDate; ?></h3>
      </div>
    </section>

    <section class="section__container feature__container" id="service">
      <div class="feature__card">
        <img src="assets/images/feature-1.png" alt="feature" />
        <div>
          <h4>Best Destinations</h4>
          <p>Discover the most breathtaking places around the globe.</p>
        </div>
      </div>
      <div class="feature__card">
        <img src="assets/images/feature-2.png" alt="feature" />
        <div>
          <h4>Best Price Guaranteed</h4>
          <p>Enjoy unbeatable prices on every trip you book.</p>
        </div>
      </div>
      <div class="feature__card">
        <img src="assets/images/feature-3.png" alt="feature" />
        <div>
          <h4>Instant Booking</h4>
          <p>Secure your dream vacation with just a click.</p>
        </div>
      </div>
    </section>

    <section class="destination" id="destination">
      <div class="section__container destination__container">
        <h2 class="section__header">Top Destinations</h2>
        <p class="section__description">
          Find out what are the best destinations in the world
        </p>
        <div class="destination__grid">
          <div class="destination__card">
            <img src="assets/images/destination-1.jpg" alt="destination" />
            <div class="destination__content">Bhutan</div>
          </div>
          <div class="destination__card">
            <img src="assets/images/destination-2.jpg" alt="destination" />
            <div class="destination__content">Japan</div>
          </div>
          <div class="destination__card">
            <img src="assets/images/destination-3.jpg" alt="destination" />
            <div class="destination__content">Nepal</div>
          </div>
        </div>
      </div>
    </section>

    <section class="discount">
      <div class="section__container discount__container">
        <h2>
          Get upto 60% discount<br /><span>by joining us before summer</span>
        </h2>
        <div class="discount__btn">
          <button class="btn">Join Us</button>
        </div>
      </div>
    </section>

    <section class="section__container package__container" id="package">
      <h2 class="section__header">Featured Packages</h2>
      <p class="section__description">
        We will help you find the trip that's perfect for you!
      </p>
      <div class="package__grid">
        <div class="package__card">
          <img src="assets/images/package-1.jpg" alt="package" />
          <div class="package__card__details">
            <h4>Thailand City Tour</h4>
            <p>
              Explore the vibrant culture and stunning landscapes of Thailand's
              bustling cities.
            </p>
            <div>
            <a href="booking/booking.php" class="btn">Pesan Tiket</a>
              <h3>$130</h3>
            </div>
          </div>
        </div>
        <div class="package__card">
          <img src="assets/images/package-2.jpg" alt="package" />
          <div class="package__card__details">
            <h4>Laos City Tour</h4>
            <p>
              Immerse yourself in the rich culture and stunning landscapes of
              Laos.
            </p>
            <div>
            <a href="booking/booking.php" class="btn">Pesan Tiket</a>
              <h3>$150</h3>
            </div>
          </div>
        </div>
        <div class="package__card">
          <img src="assets/images/package-3.jpg" alt="package" />
          <div class="package__card__details">
            <h4>Singapore City Tour</h4>
            <p>
              Experience the vibrant blend of culture, cuisine, and cutting-edge
              architecture.
            </p>
            <div>
            <a href="booking/booking.php" class="btn">Pesan Tiket</a>
              <h3>$110</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#" class="logo">Travel<span>Dream</span></a>
          </div>
          <p>
            Explore the world's best destinations, enjoy unbeatable prices, and
            book your perfect getaway instantly.
          </p>
          <p> website ini di buat oleh pelajar SMKN 7 BATAM yang bernama "Vourel oktofit avin"</p>
          <h4>CONNECT WITH US</h4>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-google-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-linkedin-fill"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Vourel oktofit avin. All rights reserved.
      </div>
    </footer>
   

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
