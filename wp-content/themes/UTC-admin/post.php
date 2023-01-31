<?php
/*
 * Template Name: Single Page
 * Template Post Type: post,page
 */
get_header();
include 'header.php';
$menu = array_reverse($header_values);
?>
<style> 
    .team__text {
        color: <?= CFS()->get('title_color')?>
    }
</style>
<!-- <body> -->
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
                        <a href="<?php echo $menu[0]['link_name'];?>" class="header__link" data-lang="eng"><?php echo $menu[0]['name_eng']; ?></a>
                        <a href="<?php echo $menu[0]['link_name'];?>" class="header__link" data-lang="ua"><?php echo $menu[0]['name_ua']; ?></a>
                    </span>
                    ->
                    <a href="<?php echo $menu[2]['link_name'];?>" class="header__link" data-lang="eng"><?php echo $menu[2]['name_eng']; ?></a>
                    <a href="<?php echo $menu[2]['link_name'];?>" class="header__link" data-lang="ua"><?php echo $menu[2]['name_eng']; ?></a>
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
                    <a href="<?php echo $menu[2]['link_name']; ?>" class="header__link" data-lang="eng"><?php echo $menu[0]['name_eng']; ?></a>
                    <a href="<?php echo $menu[2]['link_name']; ?>" class="header__link" data-lang="ua"><?php echo $menu[0]['name_ua']; ?></a>
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
                        <a href="<?php echo $menu[3]['link_name']; ?>" class="header__link">
                            <span data-lang="eng"><?php echo $menu[3]['name_eng']; ?></span>
                            <span data-lang="ua"><?php echo $menu[3]['name_ua']; ?></span>
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

<?php get_footer();?>
</body>
</html>