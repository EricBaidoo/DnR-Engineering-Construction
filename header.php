<?php
// Header section for DnR Engineering Construction
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DnR Engineering Construction - Premier construction and engineering solutions in Ghana">
    <meta name="keywords" content="construction, engineering, Ghana, building, contractor">
    <meta name="author" content="DnR Engineering Construction">

    <title>DnR Engineering & Construction - We build the future</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/cropped-DnR-1.jpg">
    <link rel="alternate icon" href="favicon.ico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <!-- =======================
         NAVIGATION BAR
    ======================== -->

    <style>
      .navbar {
        background: #fff;
        box-shadow: 0 0.125rem 0.75rem rgba(26,79,160,0.07);
        position: relative;
        z-index: 1000;
      }
      .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 75rem;
        margin: 0 auto;
        padding: 0.7rem 1.2rem;
        width: 100%;
      }
      .logo {
        display: flex;
        align-items: center;
        gap: 0.7rem;
        font-weight: 700;
        font-size: 1.1rem;
        color: #1a4fa0;
        text-decoration: none;
      }
      .logo img {
        width: 2.2rem;
        height: 2.2rem;
        border-radius: 0.5rem;
      }
      .nav-links {
        display: flex;
        gap: 1.2rem;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
        transition: all 0.3s;
      }
      .nav-links li a {
        color: #1a2233;
        text-decoration: none;
        font-weight: 500;
        padding: 0.5rem 0.8rem;
        border-radius: 2rem;
        transition: background 0.2s, color 0.2s;
      }
      .nav-links li a.active,
      .nav-links li a:hover {
        background: #eaf1fb;
        color: #1a4fa0;
      }
      .nav-cta .btn-quote {
        background: #1a4fa0;
        color: #fff;
        font-weight: 600;
        padding: 0.5rem 1.2rem;
        border-radius: 2rem;
        box-shadow: 0 0.125rem 0.75rem rgba(26,79,160,0.10);
        text-decoration: none;
        transition: background 0.2s;
      }
      .nav-cta .btn-quote:hover {
        background: #0d47a1;
      }
      .mobile-toggle {
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 2.6rem;
        height: 2.6rem;
        cursor: pointer;
        margin-left: 1rem;
        z-index: 9999;
        background: #fff;
        border: 0.13rem solid #1a4fa0;
        border-radius: 0.7rem;
        box-shadow: 0 0.125rem 0.5rem rgba(26,79,160,0.12);
        transition: background 0.2s;
      }
      .mobile-toggle span {
        display: block;
        height: 0.31rem;
        width: 85%;
        background: #1a4fa0;
        margin: 0.32rem auto;
        border-radius: 3px;
        transition: all 0.3s cubic-bezier(.4,2,.3,1);
        position: relative;
        box-shadow: 0 0.06rem 0.13rem rgba(26,79,160,0.18);
        border: 0.07rem solid #0d47a1;
      }
      .mobile-toggle.open span:nth-child(1) {
        transform: rotate(45deg) translate(0.31rem, 0.31rem);
        background: #d32f2f;
      }
      .mobile-toggle.open span:nth-child(2) {
        opacity: 0;
      }
      .mobile-toggle.open span:nth-child(3) {
        transform: rotate(-45deg) translate(0.31rem, -0.31rem);
        background: #d32f2f;
      }
      @media (max-width: 56.25em) {
        .navbar {
          position: relative;
        }
        .container {
          flex-direction: row;
        }
        .nav-links {
          position: absolute;
          top: 4.5rem;
          left: 0;
          right: 0;
          background: #fff;
          flex-direction: column;
          align-items: flex-start;
          gap: 0.5rem;
          padding: 1.2rem 2rem;
          box-shadow: 0 0.25rem 1.5rem rgba(26,79,160,0.08);
          z-index: 100;
          display: none;
        }
        .nav-links.open {
          display: flex;
        }
        .mobile-toggle {
          display: flex !important;
        }
      }
    </style>
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo">
                <img src="assets/images/cropped-DnR-1.jpg" alt="DnR Engineering & Construction Logo">
                <span>DnR Engineering & Construction</span>
            </a>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="our-service.php">Services</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li class="nav-cta">
                    <a href="contact.php" class="btn-quote">Enquire</a>
                </li>
            </ul>
            <div class="mobile-toggle" aria-label="Open navigation menu" tabindex="0">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navLinks = document.querySelector('.nav-links');
        function toggleMenu() {
          navLinks.classList.toggle('open');
          mobileToggle.classList.toggle('open');
        }
        mobileToggle.addEventListener('click', toggleMenu);
        mobileToggle.addEventListener('keypress', function(e) {
          if (e.key === 'Enter' || e.key === ' ') {
            toggleMenu();
          }
        });
      });
    </script>
