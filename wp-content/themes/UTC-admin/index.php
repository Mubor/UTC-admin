<?php get_header(); ?>
<div class="wrapper">
        <header class="header df">
            <div class="settings">
                <div id="team-source"><?php the_field('gifs'); ?></div>
                <div id="type-source"><?php the_field('animation_text'); ?></div>
                <div id="type-loop">true</div>
            </div>
            <div class="header__body df">
                <div class="header__logo">
                    <a href="<?php the_field('menu_link_1'); ?>">utc@film</a>:
                    <span class="spec-violet">~</span> $ 
                    <span class="header__text" id="type-container"></span>
                </div>
                <div class="header__menu-button">
                    <span id="menu-button">
                        <span data-lang="eng">menu</span>
                        <span data-lang="ua">меню</span>
                    </span>
                </div>
            </div>
            <nav class="header__menu header__menu--homepage">
                <div class="header__menu-top">
                    <a href="." class="header__link" data-lang="eng"><?php the_field('menu_eng_1'); ?></a>
                    <a href="." class="header__link" data-lang="ua"><?php the_field('menu_ua_1'); ?></a>
                </div>
                <ul class="header__list">
                    <li>
                        <a href="<?php the_field('menu_link_2'); ?>" class="header__link">
                            <span data-lang="eng"><?php the_field('menu_eng_2'); ?></span>
                            <span data-lang="ua"><?php the_field('menu_ua_2'); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('menu_link_3'); ?>" class="header__link">
                            <span data-lang="eng"><?php the_field('menu_eng_3'); ?></span>
                            <span data-lang="ua"><?php the_field('menu_ua_3'); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('menu_link_3'); ?>" class="header__link">
                            <span data-lang="eng"><?php the_field('menu_eng_4'); ?></span>
                            <span data-lang="ua"><?php the_field('menu_ua_4'); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php the_field('menu_link_3'); ?>" class="header__link">
                            <span data-lang="eng"><?php the_field('menu_eng_5'); ?></span>
                            <span data-lang="ua"><?php the_field('menu_ua_5'); ?></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="main df">
            <div class="team df" id="team">
                <div class="language df">
                    <div class="language__elem">
                        <div id="ua" data-btn="ua">козак</div>
                    </div>
                    <span>~</span>
                    <div class="language__elem">
                        <div id="eng" data-btn="eng">englishman</div>
                        <!-- <a href="">englishman</a> -->
                    </div>
                </div>
            </div>
            <ul class="nav df">
                    <li><a href="<?php the_field('menu_link_2'); ?>" class="nav__link"><?php the_field('menu_eng_2'); ?></a></li>
                    <li><a href="<?php the_field('menu_link_3'); ?>" class="nav__link" ><?php the_field('menu_eng_3'); ?></a></li>
                    <li><a href="<?php the_field('menu_link_4'); ?>" class="nav__link" ><?php the_field('menu_eng_4'); ?></a></li>
                    <li><a href="<?php the_field('menu_link_5'); ?>" class="nav__link" ><?php the_field('menu_eng_5'); ?></a></li>

                    <!-- <li data-lang="ua"><a href="pages/works.html" class="nav__link">роботи</a></li>
                    <li data-lang="ua"><a href="pages/team.html" class="nav__link">команда</a></li>
                    <li data-lang="ua"><a href="pages/services.html" class="nav__link">сервіси</a></li>
                    <li data-lang="ua"><a href="pages/contacts.html" class="nav__link">контакти</a></li> -->
            </ul>
        </section>
    </div>
    <!-- <script src="dist/home.js"></script> -->
    <?php get_footer(); ?>
</body>
</html>