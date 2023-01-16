<?php 

    get_header(); 
    include 'header.php';
    $menu = array_reverse($header_values);
?>
<div class="wrapper">
        <header class="header df">
            <div class="settings">

                <div id="type-source"><?php the_field('animation_text'); ?></div>
                <div id="type-loop">true</div>
            </div>
            <div class="header__body df">
                <div class="header__logo">
                    <a href="<?php echo $menu[0]['link_name']; ?>">utc@film</a>:
                    <i>~</i> $
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
                    <a href="." class="header__link" data-lang="eng"><?php echo $menu[0]['name_eng']; ?></a>
                    <a href="." class="header__link" data-lang="ua"><?php echo $menu[0]['name_ua']; ?></a>
                </div>
                <ul class="header__list">
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
                    <div class="team__text" data-lang="eng">
                        <pre><?php echo $content['text_top_eng'];?></pre>
                    </div>
                    <div class="team__text" data-lang="ua">
                        <pre><?php echo $content['text_top_ua'];?></pre>
                    </div>
                    <div class="team__container">
                        <div class="team__picture"><?= $media_content; ?></div>
                        <div class="team__media">
                            <img src="<?php echo $content['gif_media'];?>" alt="teamgif">
                        </div>
                        <div class="team__picture"><?= $media_content; ?></div>
                    </div>
                    <div class="team__text" data-lang="eng">
                        <pre><?php echo $content['text_bot_eng'] ;?></pre>
                    </div>
                    <div class="team__text" data-lang="ua">
                        <pre><?php echo $content['text_bot_ua'] ;?></pre>
                    </div>
                </div>
                    
                <div class="language df">
                    <div class="language__elem">
                        <div id="ua" data-btn="ua"><?php the_field('language_ua');?></div>
                    </div>
                    <span>~</span>
                    <div class="language__elem">
                        <div id="eng" data-btn="eng"><?php the_field('language_eng');?></div>
                        <!-- <a href="">englishman</a> -->
                    </div>
                </div>
            </div>
            <ul class="nav df">
                    <li><a href="<?php echo $menu[1]['link_name']; ?>" class="nav__link"><?php echo $menu[1]['name_eng']; ?></a></li>
                    <li><a href="<?php echo $menu[2]['link_name']; ?>" class="nav__link" ><?php echo $menu[2]['name_eng']; ?></a></li>
                    <li><a href="<?php echo $menu[3]['link_name']; ?>" class="nav__link" ><?php echo $menu[3]['name_eng']; ?></a></li>
                    <li><a href="<?php echo $menu[4]['link_name']; ?>" class="nav__link" ><?php echo $menu[4]['name_eng']; ?></a></li>
            </ul>
        </section>
</div>    
    <?php get_footer(); ?>
</body>
</html>