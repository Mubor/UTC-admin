<?php
/*
 * Template Name: works
 */
    get_header();
    include 'header.php';
    include 'translating.php';
    $menu = array_reverse($header_values);
?>
<style>
    .message {
        color: <?php the_field('works_text_color')?>
    }
    .btn {
        color: <?php the_field('works_button_color')?>
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
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link"><?php echo $menu[0][translator('name_eng', 'name_ua')]; ?></a>
                    </span>
                    ->
                    <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link"><?php echo $menu[1][translator('name_eng', 'name_ua')]; ?></a>
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
           <div class="message">
                <span class="message__pic"><?= $media_content; ?></span>
                <span class="message__content"><?php the_field('works_title_text_' . translator('eng', 'ua'));?></span>
                <span class="message__pic"><?= $media_content; ?></span>
            </div>
            <div class="grid">
                 <!-- grid__item--maxwidth  grid__item grid__item--middlewidth  -->
<?php
 global $posts;

 $myposts = get_posts([
     'numberposts' => -1, 
     'order' => 'ASC',   
 ]);

 if($myposts) {
     foreach ($myposts as $posts) {
             setup_postdata($posts);
             $width = get_post_meta($posts->ID, 'grid-item-width')[0]; 
             $class = '';
             if ($width == 'middle') {
                $class = ' grid__item--middlewidth';

             } elseif($width == 'max') {
                $class = ' grid__item--maxwidth';
             }
             
             
 ?> 
                 <div class="<?= 'grid__item' . $class ?>">
                     <div class="grid__preview">
                            <img src="<?= get_the_post_thumbnail_url($posts->ID ,'full');?>" alt="portfolio preview">        
                     </div>
                     <div class="grid__hot-pic"><img src="../assets/media/fire.png" alt="hot"></div> 
                     <div class="grid__overlay">
                          <a href="<?= get_permalink($posts->ID)?>">
                             <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                              </svg>
                          </a>
                      </div>
                 </div>               
 
<?php } }  wp_reset_postdata(); ?>
            
            <div class="grid__sizer"></div>
            <div class="grid__gutter-sizer"></div>
            </div>
            <div class="message message--bottom">
                <?php the_field('works_bottom_text_' . translator('eng', 'ua'));?>
            </div>
           <a class="btn" href="<?php the_field('works_button_link');?>"><?php the_field('works_button_name_' . translator('eng', 'ua'));?></a>
        </section>
        
    </div>
    <?php get_footer(); ?>
</body>
</html>