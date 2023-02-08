<?php
/*
 * Template Name: services
*/
    get_header();
    include 'header.php';
    include 'translating.php';
    $menu = array_reverse($header_values);
?>
    <style>
        .description__item:first-child .description__container{
            background: url(<?php echo the_field('services_left_img')?>) no-repeat;
            background-position: <?php echo the_field('services_left_img_position')?>;
            background-size: 97% 100%;
        }
        .description__item:last-child .description__container{
            background: url(<?php echo the_field('services_right_img')?>) no-repeat;
            background-position: <?php echo the_field('services_right_img_position')?>;
            background-size: contain;
        }
        
        .main {
            color: <?php echo the_field('services_text_color') ?>
        }
        
        @media  screen and (max-width:1450px) {
            .description__item:first-child .description__container{
                background-size: 96% 100%;
            }
        }

        @media  screen and (max-width:830px) {
            .description__item:first-child .description__container{
                background-size: contain;
            }
            .description__item:last-child .description__container{
                background-size: 75%;
            }
        }
        </style>
</head>
<body>
    <div class="wrapper">
        <header class="header df">
            <div class="header__body df">
                <div id="type-source"></div>
                <div id="type-loop">true</div>
                <div class="header__logo header__logo--path">
                    <a href="<?php echo $menu[0]['link_name']; ?>">utc@film</a><span class="header__mobile-hidden">:</span>
                    <i class="header__mobile-hidden">~</i>
                    <span class="header__mobile-hidden">$</span>
                    <span class="header__text">
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link"><?php echo $menu[0][translator('name_eng', 'name_ua')]; ?></a>
                    </span>
                    ->
                    <a href="<?php echo $menu[3]['link_name']; ?>" class="header__link"><?php echo $menu[3][translator('name_eng', 'name_ua')]; ?></a>
                    <span class="type-cursor">|</span>
                </div>
                <div class="header__menu-button">
                    <span id="menu-button"><?= translator('menu', 'меню') ?></span>
                </div>
            </div>
            <nav class="header__menu">
                <div class="header__menu-top">
                    <a href="<?php echo $menu[3]['link_name']; ?>" class="header__link"><?php echo $menu[3][translator('name_eng', 'name_ua')]; ?></a>
                </div>
                <ul class="header__list">
                    <li class="header__link--current">
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link">
                            <span ><?php echo $menu[0][translator('name_eng', 'name_ua')]; ?></span>
                        </a>
                    </li>   
                    <li>
                        <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link">
                            <span ><?php echo $menu[1][translator('name_eng', 'name_ua')]; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $menu[2]['link_name']; ?>" class="header__link">
                            <span ><?php echo $menu[2][translator('name_eng', 'name_ua')]; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $menu[4]['link_name']; ?>" class="header__link">
                            <span ><?php echo $menu[4][translator('name_eng', 'name_ua')]; ?></span>
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
                            <div class="description__title">
                                <div data-dev="desktop">
                                    <pre><?php the_field('services_keytext_left_desktop_' . translator('eng', 'ua'));?></pre>
                                </div>
                                <div data-dev="mobile">
                                    <pre><?php the_field('services_keytext_left_mobile_' . translator('eng', 'ua'));?></pre>
                                </div>
                            </div>
                        </div>
                        <ul class="description__list" style="color:<?= CFS()->get('list_text_color') ?>">
                            <?php 
                                $items = CFS()->get('services_left_list');
                                foreach($items as $li) {
                                    ?>
                                <li>
                                    <span><?= $li['services_li_' . translator('eng', 'ua')];?></span>
                                </li>
                            <?php       
                                }
                                ?>
                        </ul>

                    </div>
                    <div class="description__item">
                        <div class="description__container">
                            <div class="description__title">
                                <div data-dev="desktop">
                                    <pre><?php the_field('services_keytext_rigth_desktop_' . translator('eng', 'ua'));?></pre>
                                </div>
                                <div data-dev="mobile">
                                        <pre><?php the_field('services_keytext_rigth_mobile_' . translator('eng', 'ua'));?></pre>
                                </div>
                            </div>
                        </div>
                        <ul class="description__list" style="color:<?= CFS()->get('list_text_color') ?>">
                            <?php 
                                $items = CFS()->get('services_right_list');
                                foreach($items as $li) {
                                    ?>
                                <li>
                                    <span><?= $li['services_li_' . translator('eng', 'ua')];?></span>
                                </li>
                            <?php       
                                }
                                ?>

                        </ul>
                    </div>
                </div>
            </div>
                <div class="text">
                    <div class="text__body df">
                        <div class="text__img"><?= $media_content; ?></div>
                       
                        <div class="text__item">
                            <span data-dev="desktop">
                                <?php the_field('services_title_text_desktop_' . translator('eng', 'ua'));?> 
                            </span>
                            <span data-dev="mobile">
                                <?php the_field('services_title_text_mobile_' . translator('eng', 'ua'));?> 
                            </span>
                        </div>
                        <div class="text__img"><?= $media_content; ?></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php get_footer(); ?>
</body>
</html>

