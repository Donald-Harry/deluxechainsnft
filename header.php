<?php
include 'livechat.php';
?>
<header class="navbar" id="c4">
  <div class="container">
    <div class="content">
      <a href="#" class="logo"><img src="/images/logo.png" alt="Company Logo" /></a>
      <i class="bx bx-menu mobile-menu" id="mobile-cta"></i>

      <nav class="navigation">
        <img id="mobile-exit" class="mobile-menu-exit" src="images/exit.svg" alt="Close Navigation" />

        <ul class="primary-nav">
          <li class="link current">
            <a href="index.php" class="links">Home</a>
          </li>
          <li class="link">
            <a href="about-us.php" class="links">About Us</a>
          </li>
          <li class="link linkdrop">
            <a href="#" class="links">Nft</a>
            <i class="fa-solid fa-caret-down" id="dropdown-icon"></i>
            <ul class="dropdown" id="dropdown-ul">
              <li class="dropdown-link">
                <a href="our-shop.php" class="links">Our Shop</a>
              </li>
              <li class="dropdown-link">
                <a href="collections.php" class="links">Collections</a>
              </li>
            </ul>
          </li>
          <li class="link">
            <a href="faqs.php" class="links">Faqs</a>
          </li>
          <li class="link">
            <a href="contact.php" class="links">Contact</a>
          </li>
        </ul>

        <ul class="secondary-nav">
          <li class="login">
            <a href="db/enter/register.php" target="_blank" class="login-cta">Login</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>