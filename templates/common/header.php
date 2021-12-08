<?php
ini_set("display_errors", 1);

$navSalesHouses = file_get_contents("https://api.bidgames.store/navSalesHouses");
$navSalesHouses = json_decode($navSalesHouses, true);
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
<meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <meta name="referrer" content="origin-when-cross-origin">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="apple-touch-icon" sizes="57x57" href="./assets/media/images/meta/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/media/images/meta/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/media/images/meta/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/media/images/meta/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/media/images/meta/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/media/images/meta/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/media/images/meta/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/media/images/meta/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/media/images/meta/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./assets/media/images/meta/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/media/images/meta/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/media/images/meta/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/media/images/meta/favicon-16x16.png">
    <link rel="manifest" href="./assets/media/images/meta/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./assets/media/images/meta/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>BIDGAMES</title>

    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/fonts.css" rel="stylesheet">
    <link href="./assets/css/responsive.css" rel="stylesheet">
    <link href="./assets/css/reboot.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="containerHoverNav horizontalPadding centerSpacebetween">
        <form class="searchForm row">
            <button class="searchBtn" type="submit">
                <img src="../../assets/media/images/searchIcon.svg">
                <i class="fa fa-search"></i>
            </button>
            <input type="text" placeholder="Rechercher un objet, une vente, un lieu.." name="search">

        </form>
        <a href="/">
            <img class="logoNav" src="../../assets/media/images/logoBidgames.svg">
        </a>

        <div class="containerLogBtn">
            <a class="btnsLogin lightGrey" href="#">Créer un compte</a>
            <a class="btnsLogin" href="#">Connexion</a>
        </div>
    </div>
    <div class="center">
        <nav class="horizontalPadding">
            <ul class="center">
                <li class="navLinks">
                    <a href="#">Historique des enchères</a>
                </li>
                <div class="redLine bgRed"></div>
                <li class="navLinks dropdown">
                    <a href="#" class="dropbtn">Maison de vente</a>
                    <div class="containerDropdownContent">
                        <div class="dropdownContent">
                            <p class="titleDropdown">Maison des ventes</p>
                            <hr class="lightGrey">
                            <div class="centerSpacebetween wrap">
                                <?php
                                foreach($navSalesHouses['results'] as $navSaleHouse) {
                                    ?>
                                    <a href="#<?= $navSaleHouse['house_id'] ?>">><?= $navSaleHouse['name'] ?></a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </li>
                <div class="redLine bgRed"></div>
                <li class="navLinks">
                    <a href="#">Estimer un objet</a>
                </li>
                <div class="redLine bgRed"></div>
                <li class="navLinks">
                    <a href="#">Favoris</a>
                    <img src="../../assets/media/images/blackEmptyHeart.svg">
                </li>
            </ul>
        </nav>
    </div>
</header>