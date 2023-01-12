<?php 
    get_header(); 
    include 'header.php';
    $menu = array_reverse($header_values);
    // var_dump($menu);
?>
<div class="wrapper">
        <header class="header df">
            <div class="settings">
                <!-- <div id="team-source"><?php the_field('gifs'); ?></div> -->
                <div id="type-source"><?php the_field('animation_text'); ?></div>
                <div id="type-loop">true</div>
            </div>
            <div class="header__body df">
                <div class="header__logo">
                    <a href="<?php echo $menu[0]['link_name']; ?>">utc@film</a>:
                    <span class="spec-violet">~</span> $ 
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
                    function get_values_from_db($id): ?array {
                        $top_eng = get_post_meta( $id, 'text_top_eng', true );
                        $bot_eng = get_post_meta( $id, 'text_bot_eng', true );
                        $top_ua = get_post_meta( $id, 'text_top_ua', true );
                        $bot_ua = get_post_meta( $id, 'text_bot_ua', true );
                        return [$top_eng, $bot_eng, $top_ua, $bot_ua];
                    }
                    function get_post_id($data): ?int {
                        $matchs = array( );
                        $regex = preg_match_all("/wp-image-([0-9]+)/", $data, $matchs);
                        $groups = $matchs[1];
                        $random = array_rand($groups);
                        $rand_id = $groups[$random];
                        return $rand_id;
                    }
                    
                    $img_id = get_post_id(get_field("gifs_rand"));
                    $text_arr = get_values_from_db($img_id);
                    $img = wp_get_attachment_image_url($img_id);
                    // echo("<script>console.log('PHP: " . $img . "');</script>");
                    // echo("<script>console.log('PHP: " . $text_arr[3] . "');</script>");
                    ?>
                <div class="team__media">
                    <img src="<?php echo $img ;?>" alt="teamgif">
                </div>
                <div class="team__message" id="team-message">
                    <div class="team__text" data-lang="eng">
                        <?php echo $text_arr[0];?>
                    </div>
                    <div class="team__text" data-lang="ua">
                        <?php echo $text_arr[2];?>
                    </div>
                    <div class="team__container">
                        <div class="team__picture">
                            <svg viewBox="0 0 56 56" fill="none">
                                <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                                <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                                <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
                            </svg>
                        </div>
                        <div class="team__media">
                            <img src="<?php echo $img ;?>" alt="teamgif">
                        </div>
                        <div class="team__picture">
                            <svg viewBox="0 0 56 56" fill="none">
                                <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                                <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                                <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
                            </svg>
                        </div>
                    </div>
                    <div class="team__text" data-lang="eng">
                        <?php echo $text_arr[1];?>
                    </div>
                    <div class="team__text" data-lang="ua">
                    <?php echo $text_arr[3];?>
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

                    <!-- <li data-lang="ua"><a href="pages/works.html" class="nav__link">роботи</a></li>
                    <li data-lang="ua"><a href="pages/team.html" class="nav__link">команда</a></li>
                    <li data-lang="ua"><a href="pages/services.html" class="nav__link">сервіси</a></li>
                    <li data-lang="ua"><a href="pages/contacts.html" class="nav__link">контакти</a></li> -->
            </ul>
        </section>
</div>
    <!-- <script src="dist/home.js"></script> -->
    
    <?php get_footer(); ?>
</body>
</html>