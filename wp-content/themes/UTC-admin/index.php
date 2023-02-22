<?php 
    get_header(); 
    include 'header.php';
    include 'translating.php';
    $menu = array_reverse($header_values);
?>
<style>
    .team__text--mobile {
        display: none;
    }

    @media screen and (max-width:830px) {
        .team__text {
            display: none;
        }
        .team__text--mobile {
            display: block;
        }
    }
</style>
</head>
<body>
<div class="wrapper">
        <header class="header df">
            <div class="settings">
                <div id="type-source">
                    <?php 
                        $pairs = CFS()->get('animation_text');
                        $rand_id = array_rand($pairs);
                        $content = $pairs[$rand_id][translator('eng','ua')];
                        echo $content;
                    ?>
                </div>
                <div id="type-loop">true</div>
            </div>
            <div class="header__body df">
                <h1 class="header__logo">
                    <a href="<?php echo $menu[0]['link_name']; ?>">utc@film</a>:
                    <i>~</i> $
                    <span class="header__text" id="type-container"></span>
                </h1>
                <div class="header__menu-button">
                    <span id="menu-button"><?= translator('menu', 'меню') ?></span>
                </div>
            </div>
            <nav class="header__menu header__menu--homepage">
                <div class="header__menu-top">
                    <a href="." class="header__link"><?php echo $menu[0][translator('name_eng', 'name_ua')]; ?></a>
                </div>
                <ul class="header__list">
                    <li>
                        <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link"><?php echo $menu[1][translator('name_eng', 'name_ua')]; ?></a>
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
        <section class="main df">
            <div class="team df" id="team">
                <?php 
                        $pairs = CFS()->get('gifs_content');
                        $rand_id = array_rand($pairs);
                        $content = $pairs[$rand_id];
                ?>
                <style>
                    .team__media>img {
                        transform: scale(<?php echo $content['gif_scale']?>)
                    }
                </style>
                <div class="team__media">
                    <img src="<?php echo $content['gif_media'] ;?>" alt="teamgif">
                </div>
                <div class="team__message" id="team-message">
                    <div class="team__text" >
                        <pre><?php echo $content['text_top_' . translator('eng', 'ua')];?></pre>
                    </div>
                    <div class="team__text team__text--mobile" >
                        <pre><?php echo $content['text_top-mobile_' . translator('eng', 'ua')];?></pre>
                    </div>
                    <div class="team__container">
                        <div class="team__picture"><?= $media_content; ?></div>
                        <div class="team__media">
                            <img src="<?php echo $content['gif_media'];?>" alt="teamgif">
                        </div>
                        <div class="team__picture"><?= $media_content; ?></div>
                    </div>
                    <div class="team__text" >
                        <pre><?php echo $content['text_bot_' . translator('eng', 'ua')] ;?></pre>
                    </div>
                    <div class="team__text team__text--mobile" >
                        <pre><?php echo $content['text_bot-mobile_' . translator('eng', 'ua')] ;?></pre>
                    </div>
                </div>
                    
                <div class="language df">
                    <div class="language__elem">
                        <div id="ua" data-btn="ua" ><?php the_field('language_ua');?></div>
                    </div>
                    <span>~</span>
                    <div class="language__elem">
                        <div id="eng" data-btn="eng"><?php the_field('language_eng');?></div>
                    </div>
                </div>
            </div>
            <ul class="nav df">
                    <li><a href="<?php echo $menu[1]['link_name']; ?>" class="nav__link"><?php echo $menu[1][translator('name_eng', 'name_ua')]; ?></a></li>
                    <li><a href="<?php echo $menu[2]['link_name']; ?>" class="nav__link" ><?php echo $menu[2][translator('name_eng', 'name_ua')]; ?></a></li>
                    <li><a href="<?php echo $menu[3]['link_name']; ?>" class="nav__link" ><?php echo $menu[3][translator('name_eng', 'name_ua')]; ?></a></li>
                    <li><a href="<?php echo $menu[4]['link_name']; ?>" class="nav__link" ><?php echo $menu[4][translator('name_eng', 'name_ua')]; ?></a></li>
            </ul>
        </section>
</div>    
    <?php get_footer(); ?>
</body>
</html>