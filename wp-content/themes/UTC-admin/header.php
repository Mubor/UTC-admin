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
                    <span id="menu-button" data-lang="menu-button">menu</span>
                </div>
            </div>
            <nav class="header__menu header__menu--homepage">
                <div class="header__menu-top">
                    <a href="." class="header__link" data-lang="link-1">home</a>
                </div>
                <ul class="header__list">
                    <li><a href="pages/works.html" class="header__link" data-lang="link-2">works</a></li>
                    <li><a href="pages/team.html" class="header__link" data-lang="link-3">team</a></li>
                    <li><a href="pages/services.html" class="header__link" data-lang="link-4">services</a></li>
                    <li><a href="pages/contacts.html" class="header__link" data-lang="link-5">contacts</a></li>
                </ul>
            </nav>
        </header>