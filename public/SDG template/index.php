<?php
include('db_conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5a883bd754.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Montserrat:ital,wght@0,300;0,400;1,200&display=swap" rel="stylesheet">
    <title>SDG CARDS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="./img/un-favicon.webp">
</head>
<body>
<header class="header__container">
  <nav class="header__navbar">
            <div class="header__mobileNav">
                <div class="header__phoneNavButton">
                    <button id="openPhoneNav" aria-label="Toggle Mobile Navigation">&#9776;</button>
                </div>
                <ul class="header__phoneNav" aria-label="Mobile Navigation Menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Over ons</a></li>
                    <li><a href="./index.php">SDG's</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login</a></li>
                    <li class="header__closeButton"><button id="closePhoneNav"
                            aria-label="Close Mobile Navigation">&#10006;</button></li>
                </ul>
            </div>

            <ul class="header__navItems">
                <a class="header__imgContainer" href="./index.html"><img src="IMG/"
                        alt="Logo"></a>
            </ul>

            <ul class="header__navItems">
                <li class="header__navLinks"><a href="./sdg.html" class="header__navLinkItem">SDG's</a></li>
                <li class="header__navLinks"><a href="./info.html" class="header__navLinkItem">Informatie</a></li>
                <li class="header__navLinks"><a href="./about.html" class="header__navLinkItem">Over Ons</a></li>
            </ul>

            <ul class="header__navItems">
                <li class="header__navLogin"><a href="#" aria-label="Login"><i class="fa-regular fa-user"></i></a></li>
            </ul>
  </nav>
</header>
<ul class="gallery">
  <?php include('sdg.php'); ?>
</ul>
</body>
</html>
