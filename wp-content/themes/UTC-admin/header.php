<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" type="text/css" href="styles/pages/home/style.css"> -->
    <?php wp_head(); ?>
    
</head>
<body>
    <div class="wrapper">
        <header class="header df">
            <div id="type-source">hello dude</div>
            <div id="type-loop">true</div>
            <div class="header__body df">
                <div class="header__logo">
                    <a href=".">utc@film</a>:
                    <span class="spec-violet">~</span> $ 
                    <span class="header__text" id="type-container"></span>
                </div>
                <div class="header__menu-button">
                    <span id="menu-button" data-lang="eng">menu</span>
                    <span id="menu-button" data-lang="ua">меню</span>
                </div>
            </div>
            <nav class="header__menu header__menu--homepage">
                <div class="header__menu-top">
                    <a href="." class="header__link" data-lang="eng">home</a>
                    <a href="." class="header__link" data-lang="ua">головна</a>
                </div>
                <ul class="header__list" data-lang="eng">
                    <li><a href="pages/works.html" class="header__link">works</a></li>
                    <li><a href="pages/team.html" class="header__link" >team</a></li>
                    <li><a href="pages/services.html" class="header__link" >services</a></li>
                    <li><a href="pages/contacts.html" class="header__link" >contacts</a></li>
                </ul>
                <ul class="header__list" data-lang="ua">
                    <li><a href="pages/works.html" class="header__link">роботи</a></li>
                    <li><a href="pages/team.html" class="header__link">команда</a></li>
                    <li><a href="pages/services.html" class="header__link">сервіси</a></li>
                    <li><a href="pages/contacts.html" class="header__link">контакти</a></li>
                </ul>
            </nav>
        </header>