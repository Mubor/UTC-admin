<?php
/*
* Template Name: Single Page
* Template Post Type: post,page
*/
get_header();
include 'header.php';
include 'translating.php';
$menu = array_reverse($header_values);
?>

<style> 
    p {
        color: <?php the_field('post_text_color')?>;
    }

    .splide .splide__arrow {
        background: <?= the_field('keytext_background');?>
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
                        ->
                        <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link"><?php echo $menu[1][translator('name_eng', 'name_ua')]; ?></a>
                    </span>
                    -> 
                    <a href="." class="header__link"><?php the_field('post_name_' . translator('eng', 'ua')) ?></a>
                    <span class="type-cursor">|</span>
                </div>
                <div class="header__menu-button">
                    <span id="menu-button"><?= translator('menu', 'меню') ?></span>
                </div>
            </div>
            <nav class="header__menu">
                <div class="header__menu-top">
                    <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link"><?php echo $menu[1][translator('name_eng', 'name_ua')]; ?></a>
                </div>
                <ul class="header__list">
                    <li class="header__link--current">
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link"><?php echo $menu[0][translator('name_eng', 'name_ua')]; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $menu[2]['link_name']; ?>" class="header__link"><?php echo $menu[2][translator('name_eng', 'name_ua')]; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $menu[3]['link_name']; ?>" class="header__link"><?php echo $menu[3][translator('name_eng', 'name_ua')]; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $menu[4]['link_name']; ?>" class="header__link"><?php echo $menu[4][translator('name_eng', 'name_ua')]; ?></a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="main">
            <div class="post">
                <?php echo the_content()?>
            </div>
        </section>

    </div>

<?php get_footer();?>
</body>
</html>