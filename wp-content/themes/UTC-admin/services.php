<?php
/*
 * Template Name: services
 */
get_header();
?>

    <div class="wrapper">
        <header class="header df">
            <div class="header__body df">
                <div id="type-source"></div>
                <div id="type-loop">true</div>
                <div class="header__logo header__logo--path">
                    <a href="<?php the_field('menu_link_1'); ?>">utc@film</a><span class="header__mobile-hidden">:</span>
                    <span class="spec-violet header__mobile-hidden">~</span>
                    <span class="header__mobile-hidden">$</span>
                    <span class="header__text">
                        <a href="<?php the_field('menu_link_1')?>" class="header__link" data-lang="eng"><?php the_field('menu_eng_1'); ?></a>
                        <a href="<?php the_field('menu_link_1')?>" class="header__link" data-lang="ua"><?php the_field('menu_ua_1'); ?></a>
                    </span>
                    ->
                    <a href="<?php the_field('menu_link_4')?>" class="header__link" data-lang="eng"><?php the_field('menu_eng_4'); ?></a>
                    <a href="<?php the_field('menu_link_4')?>" class="header__link" data-lang="ua"><?php the_field('menu_ua_4'); ?></a>
                    <span class="type-cursor">|</span>
                </div>
                <div class="header__menu-button">
                    <span id="menu-button">
                        <span data-lang="eng">menu</span>
                        <span data-lang="ua">меню</span>
                    </span>
                </div>
            </div>
            <nav class="header__menu">
                <div class="header__menu-top">
                    <a href="<?php the_field('menu_link_4')?>" class="header__link" data-lang="eng"><?php the_field('menu_eng_4'); ?></a>
                    <a href="<?php the_field('menu_link_4')?>" class="header__link" data-lang="ua"><?php the_field('menu_ua_4'); ?></a>
                </div>
                <ul class="header__list">
                    <li class="header__link--current">
                        <a href="<?php the_field('menu_link_1'); ?>" class="header__link">
                            <span data-lang="eng"><?php the_field('menu_eng_1'); ?></span>
                            <span data-lang="ua"><?php the_field('menu_ua_1'); ?></span>
                        </a>
                    </li>
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
                        <a href="<?php the_field('menu_link_5'); ?>" class="header__link">
                            <span data-lang="eng"><?php the_field('menu_eng_5'); ?></span>
                            <span data-lang="ua"><?php the_field('menu_ua_5'); ?></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="main">
            <div class="container">
                <div class="description df">
                    <div class="description__item">
                        <div class="description__container">
                            <p class="description__title" data-lang="desc-title-1">
                                <span>STRONG</span>
                                <span>CRE@TIVE<span class="spec-violet">±</span></span>
                            </p>
                        </div>
                        <ul class="description__list" data-lang="desc-list-1">
                            <li>360° marketing campaign</li>
                            <li>Communication strategy</li>
                            <li>MultiChannel Experience</li>
                            <li>Product development</li>
                            <li>Branding and packaging</li>
                        </ul>
                    </div>
                    <div class="description__item">
                        <div class="description__container">
                            <p data-lang="desc-title-2">
                                <span class="description__title">FULL <span class="spec-orange">$</span>ERVICE</span>
                                <span class="description__title">/VIDEO PRODUCTION</span>
                            </p>
                        </div>
                        <ul class="description__list" data-lang="desc-list-2">
                            <li>Films</li>
                            <li>Photo shots</li>
                            <li>2D/3D animation</li>
                            <li>Stop motion/Craft</li>
                            <li>Adaptation</li>
                        </ul>
                    </div>
                </div>
            </div>
                <div class="text">
                    <div class="text__body df">
                        <div class="text__img">
                            <svg viewBox="0 0 56 56" fill="none">
                                <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                                <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                                <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
                        </svg>  
                    </div>
                    <div class="text__item" data-lang="slogan">
                        Pimp your brand<span>,</span> du<span>uuu</span>de
                    </div>
                    <div class="text__img">
                        <svg viewBox="0 0 56 56" fill="none">
                            <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                            <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                            <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- <script src="../dist/simple.js"></script> -->
    <?php get_footer(); ?>
</body>
</html>