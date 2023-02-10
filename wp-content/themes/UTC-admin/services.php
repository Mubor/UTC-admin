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
            background: url() no-repeat;
            background-position: bottom 0 left 0;
            background-size: 96% 100%;
        }
        .description__item:first-child .description__container{
            background: url() no-repeat;
            background-position: bottom 0 right 0;
            background-size: contain;
        }

    </style>

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
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link" data-lang="eng"><?php echo $menu[0]['name_eng']; ?></a>
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link" data-lang="ua"><?php echo $menu[0]['name_ua']; ?></a>
                    </span>
                    ->
                    <a href="<?php echo $menu[3]['link_name']; ?>" class="header__link" data-lang="eng"><?php echo $menu[3]['name_eng']; ?></a>
                    <a href="<?php echo $menu[3]['link_name']; ?>" class="header__link" data-lang="ua"><?php echo $menu[3]['name_ua']; ?></a>
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
                    <a href="<?php echo $menu[3]['link_name']; ?>" class="header__link" data-lang="eng"><?php echo $menu[3]['name_eng']; ?></a>
                    <a href="<?php echo $menu[3]['link_name']; ?>" class="header__link" data-lang="ua"><?php echo $menu[3]['name_ua']; ?></a>
                </div>
                <ul class="header__list">
                    <li class="header__link--current">
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link">
                            <span data-lang="eng"><?php echo $menu[0]['name_eng']; ?></span>
                            <span data-lang="ua"><?php echo $menu[0]['name_ua']; ?></span>
                        </a>
                    </li>   
                    <li>
                        <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link">
                            <span data-lang="eng"><?php echo $menu[1]['name_eng']; ?></span>
                            <span data-lang="ua"><?php echo $menu[1]['name_ua']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $menu[2]['link_name']; ?>" class="header__link">
                            <span data-lang="eng"><?php echo $menu[2]['name_eng']; ?></span>
                            <span data-lang="ua"><?php echo $menu[2]['name_ua']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $menu[4]['link_name']; ?>" class="header__link">
                            <span data-lang="eng"><?php echo $menu[4]['name_eng']; ?></span>
                            <span data-lang="ua"><?php echo $menu[4]['name_ua']; ?></span>
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
                            <p class="description__title" data-lang="eng">
                                <?php the_field('services_keytext_left_eng');?>
                            </p>
                            <p class="description__title" data-lang="ua">
                                <?php the_field('services_keytext_left_ua');?>
                            </p>
                        </div>
                        <ul class="description__list" style="color:<?= CFS()->get('list_text_color') ?>">
                            <?php 
                                $items = CFS()->get('services_left_list');
                                foreach($items as $li) {
                            ?>
                                <li>
                                    <span data-lang="eng"><?= $li['services_li_eng'];?></span>
                                    <span data-lang="ua"><?= $li['services_li_ua'];?></span>
                                </li>
                            <?php       
                                }
                            ?>
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
                        <ul class="description__list" style="color:<?= CFS()->get('list_text_color') ?>">
                            <?php 
                                $items = CFS()->get('services_right_list');
                                foreach($items as $li) {
                            ?>
                                <li>
                                    <span data-lang="eng"><?= $li['services_li_eng'];?></span>
                                    <span data-lang="ua"><?= $li['services_li_ua'];?></span>
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
                            <span data-lang="eng">
                                <?php the_field('services_title_text_eng');?> 
                            </span>
                            <span data-lang="ua">
                                <?php the_field('services_title_text_ua');?> 
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