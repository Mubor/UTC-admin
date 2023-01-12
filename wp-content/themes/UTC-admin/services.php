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
                    <a href="../index.html">utc@film</a><span class="header__mobile-hidden">:</span>
                    <span class="spec-violet header__mobile-hidden">~</span>
                    <span class="header__mobile-hidden">$</span>
                    <span class="header__text">
                        <a href="../index.html" data-lang="link-1">HOME</a>
                    </span>
                    ->
                    <a href="../pages/services.html" data-lang="link-4">SERVICES</a>
                    <span class="type-cursor">|</span>
                </div>
                <div class="header__menu-button">
                    <span id="menu-button" data-lang="menu-button">menu</span>
                </div>
            </div>
            <nav class="header__menu">
                <div class="header__menu-top">
                    <a href="../pages/services.html" class="header__link" data-lang="link-4">services</a>
                </div>
                <ul class="header__list">
                    <li class="header__link--current"><a href="../index.html" class="header__link" data-lang="link-1">home</a></li>
                    <li><a href="works.html" class="header__link" data-lang="link-2">works</a></li>
                    <li><a href="team.html" class="header__link" data-lang="link-3">team</a></li>
                    <li><a href="contacts.html" class="header__link" data-lang="link-5">contacts</a></li>
                </ul>
            </nav>
        </header>
        <section class="main">
            <div class="container">
                <div class="description df">
                    <div class="description__item">
                        <div class="description__container">
                            <p class="description__title" data-lang="eng">
                                <?php the_field('services_keytext_left_eng');?>
                            </p>
                            <p class="description__title" data-lang="ua">
                                <?php the_field('services_keytext_left_ua');?>
                            </p>
                        </div>
                        <ul class="description__list">
                            <li data-lang="eng"><?php the_field('services_list-left_1_eng');?></li>
                            <li data-lang="eng"><?php the_field('services_list-left_2_eng');?></li>
                            <li data-lang="eng"><?php the_field('services_list-left_3_eng');?></li>
                            <li data-lang="eng"><?php the_field('services_list-left_4_eng');?></li>
                            <li data-lang="eng"><?php the_field('services_list-left_5_eng');?></li>

                            <li data-lang="ua"><?php the_field('services_list-left_1_ua');?></li>
                            <li data-lang="ua"><?php the_field('services_list-left_2_ua');?></li>
                            <li data-lang="ua"><?php the_field('services_list-left_3_ua');?></li>
                            <li data-lang="ua"><?php the_field('services_list-left_4_ua');?></li>
                            <li data-lang="ua"><?php the_field('services_list-left_5_ua');?></li>
        
                        </ul>
                        
                    </div>
                    <div class="description__item">
                        <div class="description__container">
                            <p data-lang="eng">
                                <?php the_field('services_keytext_right_eng');?>
                            </p>
                            <p data-lang="ua">
                                <?php the_field('services_keytext_right_ua');?>
                            </p>
                        </div>
                        <ul class="description__list">
                            <li data-lang="eng"><?php the_field('services_list-right_1_eng');?></li>
                            <li data-lang="eng"><?php the_field('services_list-right_2_eng');?></li>
                            <li data-lang="eng"><?php the_field('services_list-right_3_eng');?></li>
                            <li data-lang="eng"><?php the_field('services_list-right_4_eng');?></li>
                            <li data-lang="eng"><?php the_field('services_list-right_5_eng');?></li>

                            <li data-lang="ua"><?php the_field('services_list-right_1_ua');?></li>
                            <li data-lang="ua"><?php the_field('services_list-right_2_ua');?></li>
                            <li data-lang="ua"><?php the_field('services_list-right_3_ua');?></li>
                            <li data-lang="ua"><?php the_field('services_list-right_4_ua');?></li>
                            <li data-lang="ua"><?php the_field('services_list-right_5_ua');?></li>

                        </ul>
                    </div>
                </div>
            </div>
                <div class="text">
                    <div class="text__body df"><?php the_field('services_title_media_1');?></div>
                        <!-- <div class="text__img">
                            <svg viewBox="0 0 56 56" fill="none">
                                <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                                <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                                <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
                        </svg>  
                    </div> -->
                    <div class="text__item" data-lang="eng">
                            <?php the_field('services_title_text_eng');?> 
                    </div>
                    <div class="text__item" data-lang="ua">
                            <?php the_field('services_title_text_ua');?>
                    </div>
                    <div class="text__img"><?php the_field('services_title_media_2');?></div>
                        <!-- <svg viewBox="0 0 56 56" fill="none">
                            <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                            <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                            <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
                        </svg>
                    </div> -->
                </div>
            </div>
        </section>
    </div>
    <!-- <script src="../dist/simple.js"></script> -->
    <?php get_footer(); ?>
</body>
</html>