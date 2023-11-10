<?php
include_once("../src/db_conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5a883bd754.js" crossorigin="anonymous"></script>
    <title>NVVN - Nederlandse Vereniging voor de Verenigde Naties</title>
    <link rel="stylesheet" href="/src/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Montserrat:ital,wght@0,300;0,400;1,200&display=swap" rel="stylesheet">
    <script src="/src/js/index.js" defer></script>
    <link rel="icon" type="image/x-icon" href="/src/img/un-favicon.webp">
</head>

<body>

    <header class="header__container">
        <nav class="header__navbar">
            <div class="header__mobileNav">
                <div class="header__phoneNavButton">
                    <button id="openPhoneNav" aria-label="Toggle Mobile Navigation">&#9776;</button>
                </div>
                <ul class="header__phoneNav" aria-label="Mobile Navigation Menu">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="./about/about.php">Over ons</a></li>
                    <li><a href="./sdg/index.php">SDG's</a></li>
                    <li><a href="./info/info.php">Informatie</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="./login/login.php">Login</a></li>
                    <li class="header__closeButton"><button id="closePhoneNav" aria-label="Close Mobile Navigation">&#10006;</button></li>
                </ul>
            </div>

            <ul class="header__navItems">
                <a class="header__imgContainer" href="../index.php"><i style="font-size: 2rem;" class="fa-solid fa-house home"></i></a>
            </ul>

            <ul class="header__navItems">
                <li class="header__navLinks"><a href="SDG template/index.php" class="header__navLinkItem">SDG's</a></li>
                <li class="header__navLinks"><a href="./info/info.php" class="header__navLinkItem">Informatie</a></li>
                <li class="header__navLinks"><a href="./about/about.php" class="header__navLinkItem">Over Ons</a></li>
            </ul>

            <ul class="header__navItems">
                <li class="header__navLogin"><a href="./login/login.php" aria-label="Login"><i class="fa-regular fa-user"></i></a></li>
            </ul>
        </nav>
    </header>

    <section class="slogan__container">
        <div class="slogan__imgContainer">
            <figure class="slogan__img">
                <p class="slogan__imgCaption">
                    VN Forum is het digitale tijdschrift van de Nederlandse Vereniging voor de Verenigde Naties (NVVN).
                </p>
            </figure>
        </div>
    </section>

    <section class="homepage__container">
        <div class="homepage__featured-container">
            <p class="homepage__featured-text">Uitgelichte SDG's:</p>
        </div>
        <div class="homepage__container-cards">
            <div class="homepage__featured-cardscontainer">
                <ul class="homepage__featured-cards">
                    <div class="homepage__headingContainer">
                        <h1 class="homepage__Heading">Geen armoede</h1>
                    </div>
                    <div class="homepage__imgContainer">
                        <img class="homepage__img" src="./img/placeholder.webp" alt="">
                    </div>
                </ul>
                <ul class="homepage__featured-cards">
                    <div class="homepage__headingContainer">
                        <h1 class="homepage__Heading">Betaalbare Energie</h1>
                    </div>
                    <div class="homepage__imgContainer">
                        <img class="homepage__img" src="./img/placeholder.webp" alt="">
                    </div>
                </ul>
                <ul class="homepage__featured-cards">
                    <div class="homepage__headingContainer">
                        <h1 class="homepage__Heading">Klimaatactie</h1>
                    </div>
                    <div class="homepage__imgContainer">
                        <img class="homepage__img" src="./img/placeholder.webp" alt="">
                    </div>
                </ul>
                <ul class="homepage__featured-cards">
                    <div class="homepage__headingContainer">
                        <h1 class="homepage__Heading">Ongelijkheid verminderen</h1>
                    </div>
                    <div class="homepage__imgContainer">
                        <img class="homepage__img" src="./img/placeholder.webp" alt="">
                    </div>
                </ul>
            </div>
        </div>
    </section>

    <footer class="footer__container">
        <div class="footer__content">
            <ul class="footer__list">
                <form class="footer__listForm" method="post" action="">
                    <p class="footer__listFormTitle">Neem contact met ons op!</p>
                    <input class="footer__listFormEmail" type="email" name="" id="" placeholder="Uw Email">
                    <input class="footer__listFormNaam" type="text" placeholder="Uw Naam">
                    <textarea class="footer__listFormOpmerking" name="" id="" cols="30" rows="4" placeholder=" Uw Vraag/opmerking"></textarea>
                    <button class="footer__listFormButton" type="submit">Verstuur</button>
                </form>
            </ul>
            <ul class="footer__list">
                <li class="footer__listLinks"><a href="../index.php" class="footer__listLinkA">Home</a></li>
                <li class="footer__listLinks"><a href="./about/about.php" class="footer__listLinkA">Over Ons</a></li>
                <li class="footer__listLinks"><a href="./sdg/sdg.php" class="footer__listLinkA">SDG's</a></li>
                <li class="footer__listLinks"><a href="./info/info.php" class="footer__listLinkA">Informatie</a></li>
                <li class="footer__listLinks"><a href="./login/login.php" class="footer__listLinkA">Login</a></li>
            </ul>
            <ul class="footer__list socials">
                <li class="footer__listSocials">
                    <a target="_blank" href="https://www.facebook.com/UNANetherlands"><i class="fa-brands fa-facebook"></i><p>Facebook</p></a>
                    <a target="_blank" href="https://www.instagram.com/nederlandse_vereniging_vn/"><i class="fa-brands fa-instagram"></i><p>Instagram</p></a>
                    <a target="_blank" href="https://podcasts.apple.com/nl/podcast/de-vn-podcast/id1647809707?l=en%20"><i class="fa-solid fa-podcast"></i><p>Apple Podcast</p></a>
                    <a target="_blank" href="https://open.spotify.com/show/5Sgn01M9cgJJygGyPT9prc"><i class="fa-brands fa-spotify"></i><p>Spotify</p></a>
                </li>
                <li class="footer__listSocials">
                    <a target="_blank" href="https://twitter.com/UNANL"><i class="fa-brands fa-x-twitter"></i><p>Twitter</p></a>
                    <a target="_blank" href="https://www.linkedin.com/company/nederlandse-vereniging-voor-de-verenigde-naties"><i class="fa-brands fa-linkedin"></i><p>LinkedIn</p></a>
                    <a target="_blank" href="mailto:info@nvvn.nl"><i class="fa-regular fa-envelope"></i><p>Email</p></a>
                    <a target="_blank" href="https://tiktok.com/@nvvn_nl"><i class="fa-brands fa-tiktok"></i><p>Tiktok</p></a>
                </li>
            </ul>
        </div>
        <div class="footer__copyright">
            <ul>
                <b>Copyright © 2023 - Swift Code Studios</b>
            </ul>
        </div>
    </footer>
</body>

</html>