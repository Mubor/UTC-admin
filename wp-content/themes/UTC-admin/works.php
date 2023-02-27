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
</head>
<body>
    <div class="wrapper">
        <header class="header df">
            <div class="header__body df">
                <div id="type-source"></div>
                <div id="type-loop">true</div>
                <h1 class="header__logo header__logo--path">
                    <a href="<?php echo $menu[0]['link_name']; ?>">utc@film</a><span class="header__mobile-hidden">:</span>
                    <i class="header__mobile-hidden">~</i>
                    <span class="header__mobile-hidden">$</span>
                    <span class="header__text">
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link"><?php echo $menu[0][translator('name_eng', 'name_ua')]; ?></a>
                    </span>
                    ->
                    <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link"><?php echo $menu[1][translator('name_eng', 'name_ua')]; ?></a>
                    <span class="type-cursor">|</span>
                </h1>
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
           <h2 class="message">
                <span class="message__pic"><?= $media_content; ?></span>
                <span class="message__content"><?php the_field('works_title_text_' . translator('eng', 'ua'));?></span>
                <span class="message__pic"><?= $media_content; ?></span>
            </h2>
            <div class="grid">
                <?php
                    global $posts;

                $myposts = get_posts([
                    'numberposts' => -1,        
                    'order' => 'ASC',        
                    'orderby' => 'menu_order'
                ]);

                // $myposts = array_reverse($_myposts);

                    function getClass ($i, $list) {
                        return $list[$i % count($list)];
                    }

                    function getImageUrl ($class, $post) {
                        if($class == 'grid__item--middlewidth square-big' || $class == 'square-small' 
                                || $class == 'square-small square-smaller-25' || $class == 'square-small square-smaller-36'
                                || $class == 'mobile-square-big' || $class == 'mobile-square-small') {
                                return wp_get_attachment_image_url( get_post_meta($post->ID, 'grid-item-img-square')[0]);
                        }
                        else if($class == 'stories-big' || $class == 'stories-small' || $class == 'mobile-stories'
                                || $class == 'stories-small stories-smaller-16' || $class == 'stories-small stories-smaller-18' 
                                || $class == 'stories-small stories-smaller-26') {
                                return wp_get_attachment_image_url(get_post_meta($post->ID, 'grid-item-img-stories')[0]);
                        }
                        else if($class == 'grid__item--maxwidth rect-big' || $class == 'grid__item--middlewidth rect-middle' || $class == 'mobile-rect-big') {
                            return wp_get_attachment_image_url(get_post_meta($post->ID, 'grid-item-img-rect')[0]);
                        }
                        else if($class == 'rect-small' || $class == 'mobile-rect-small') {
                            return wp_get_attachment_image_url(get_post_meta($post->ID, 'grid-item-img-rect-small')[0]);
                        }
                    }

                    $gridDesktopClasses = ['grid__item--middlewidth square-big', 'square-small', 'rect-small', 'square-small', 'stories-small', 
                        'stories-small', 'square-small', 'square-small', 'grid__item--middlewidth rect-middle', 'stories-small', 
                        'square-small', 'rect-small', 'rect-small', 'rect-small', 'grid__item--maxwidth rect-big', 'stories-small stories-smaller-16', 
                        'rect-small', 'stories-small stories-smaller-18', 'square-small', 'grid__item--middlewidth rect-middle', 'rect-small', 'rect-small', 
                        'square-small', 'grid__item--middlewidth square-big', 'square-small square-smaller-25', 'stories-small stories-smaller-26', 'square-small', 
                        'grid__item--middlewidth rect-middle', 'stories-small', 'rect-small', 'rect-small', 'rect-small', 
                        'grid__item--middlewidth rect-middle', 'square-small', 'grid__item--maxwidth rect-big', 'square-small square-smaller-36', 'rect-small', 
                        'stories-small', 'rect-small', 'rect-small', 'square-small', 'grid__item--middlewidth rect-middle', 'stories-small', 
                        'square-small', 'square-small', 'square-small'
                    ];

                    $gridMobileClasses = ['mobile-square-big', 'mobile-stories', 'mobile-rect-small', 'mobile-square-small', 'mobile-rect-big', 'mobile-rect-small',
                        'mobile-square-small', 'mobile-square-small', 'mobile-stories', 'mobile-square-small','mobile-square-big', 'mobile-rect-small', 'mobile-rect-small', 'mobile-rect-big',
                        'mobile-stories', 'mobile-square-small', 'mobile-stories', 'mobile-square-small'
                    ];

                    
                    if($myposts) {
                        for ($i = 0; $i < count($myposts); $i++){
                            $posts = $myposts[$i];
                            setup_postdata($posts);
                            $class = ' ' . getClass($i, $gridDesktopClasses) . ' ' . getClass($i, $gridMobileClasses);
                            $imgDesktopUrl = getImageUrl(getClass($i, $gridDesktopClasses),  $posts);
                            $imgMobileUrl = getImageUrl(getClass($i, $gridMobileClasses),  $posts);

                            $hotPicDisplayStyle = get_post_meta($posts->ID, 'grid-hot')[0] == 'true' 
                                ? 'block' : 'none'; 

                ?>
          
                <div class="<?= 'grid__item ' . $class ?>">
                    <div class="grid__preview">
                         <img class="grid__img-desktop" src="<?= $imgDesktopUrl?>" alt="portfolio preview">        
                         <img class="grid__img-mobile" src="<?= $imgMobileUrl?>" alt="portfolio preview">        
                    </div>
                    <div class="grid__hot-pic" style="display: <?= $hotPicDisplayStyle?>"><img src="<?= the_field('hot-pic')?>" alt="hot"></div> 
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
            <p class="message message--bottom">
                <?php the_field('works_bottom_text_' . translator('eng', 'ua'));?>
            </p>
           <a class="btn" href="<?php the_field('works_button_link');?>"><?php the_field('works_button_name_' . translator('eng', 'ua'));?></a>
        </section>
        
    </div>
    <?php get_footer(); ?>
</body>
</html>