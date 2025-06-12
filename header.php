<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Responsive Navbar</title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-color: #f5f7fa;
    }

    .nav-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: white;
      padding: 10px 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      flex-wrap: wrap;
      position: sticky;
      top: 0;
      z-index: 1000;
      transition: background-color 0.3s ease;
    }

    .nav-bar:hover {
      background-color: #f0f0f0; /* Slightly darker on hover */
    }

    .logo {
      height: 50px;
      cursor: pointer;
    }

    nav {
      flex-grow: 1;
      margin-left: 30px;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      gap: 24px;
    }

    nav ul li {
      margin: 0;
    }

    nav ul li a {
      text-decoration: none;
      color: darkblue;
      font-weight: 600;
      font-size: 1rem;
      transition: color 0.3s ease, border-bottom 0.3s ease;
      padding: 8px 0;
      display: inline-block;
      position: relative;
    }

    nav ul li a:hover,
    nav ul li a:focus {
      color: #0056b3;
      outline: none;
      border-bottom: 2px solid #0056b3; /* Underline effect on hover */
    }

    .login-container {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      margin-top: 8px;
    }

    .login_btn {
      background-color: darkblue;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
      font-size: 1rem;
      text-align: center;
      transition: background-color 0.3s ease, transform 0.3s ease;
      min-width: 90px;
    }

    .login_btn a {
      color: white;
      text-decoration: none;
      display: block;
    }

    .login_btn:hover,
    .login_btn:focus {
      background-color: #0056b3;
      outline: none;
      transform: scale(1.05); /* Slightly enlarge on hover */
    }

    /* Hamburger button */
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      width: 30px;
      height: 24px;
      justify-content: space-between;
    }

    .hamburger span {
      display: block;
      height: 4px;
      background: darkblue;
      border-radius: 2px;
      transition: all 0.3s ease;
    }

    /* RESPONSIVE - MOBILE & TABLET */
    @media (max-width: 768px) {
      .nav-bar {
        justify-content: flex-start;
        gap: 12px;
      }

      /* Show hamburger */
      .hamburger {
        display: flex;
      }

      nav {
        flex-grow: 1;
        margin: 0;
        order: 3;
        width: 100%;
        transition: max-height 0.3s ease;
        overflow: hidden;
        max-height: 0;
      }

      nav.open {
        max-height: 500px; /* sufficiently large to show all items */
      }

      nav ul {
        flex-direction: column;
        gap: 12px;
        padding: 10px 0;
      }

      nav ul li {
        margin: 0;
      }

      .login-container {
        justify-content: flex-start;
        width: 100%;
        order: 4;
        padding-bottom: 10px;
        display: none;
        flex-direction: column;
        gap: 10px;
      }

      .login-container.open {
        display: flex;
      }

      .login_btn {
        flex-grow: 1;
        min-width: auto;
        padding: 12px 0;
      }
    }

    /* Hamburger animation when open */
    .hamburger.open span:nth-child(1) {
      transform: rotate(45deg) translate(5px, 5px);
    }

    .hamburger.open span:nth-child(2) {
      opacity: 0;
    }

    .hamburger.open span:nth-child(3) {
      transform: rotate(-45deg) translate(6px, -6px);
    }
  </style>
</head>
<body>
  <header>
    <div class="nav-bar" role="banner" aria-label="Main Navigation">
      <a href="index.php" aria-label="Homepage" tabindex="0">
        <img src="images/logo/AL_HAZA__3_-removebg-preview.png" alt="AL Haza Logo" class="logo" />
      </a>

      <!-- Hamburger menu button for mobile -->
      <button class="hamburger" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="primary-navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav id="primary-navigation" role="navigation" aria-label="Primary Navigation">
        <ul>
          <li><a href="index.php" tabindex="0">Home</a></li>
          <li><a href="about.php" tabindex="0">About</a></li>
          <li><a href="properties.php" tabindex="0">Properties</a></li>
          <li><a href="services.php" tabindex="0">Services</a></li>
          <li><a href="blog.php" tabindex="0">Blog</a></li>
          <li><a href="contact.php" tabindex="0">Contact</a></li>
          <?php if (isset($_SESSION["user-data"]["userlogin"]) && ($_SESSION["user-data"]["userlogin"] == "mujkl820@gmail.com")): ?>
            <li><a href="user-profile.php" tabindex="0">Admin</a></li>
          <?php else: ?>
            <li><a href="user-profile.php" tabindex="0">Client</a></li>
          <?php endif; ?>
        </ul>
      </nav>

      <div class="login-container" id="login-container">
        <button type="button" class="login_btn"><a href="/Dubai/login.php" tabindex="0">Login</a></button>
        <button type="button" class="login_btn"><a href="/Dubai/signup.php" tabindex="0">Sign up</a></button>
      </div>
    </div>
  </header>

  <script>
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('nav');
    const loginContainer = document.getElementById('login-container');

    hamburger.addEventListener('click', () => {
      const expanded = hamburger.getAttribute('aria-expanded') === 'true' || false;
      hamburger.setAttribute('aria-expanded', !expanded);
      hamburger.classList.toggle('open');
      nav.classList.toggle('open');
      loginContainer.classList.toggle('open');
    });
  </script>
</body>
</html>
