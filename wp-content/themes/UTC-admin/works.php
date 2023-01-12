<?php
/*
 * Template Name: works
 */
    get_header();
    include 'header.php';
    $menu = array_reverse($header_values);
?>

    <div class="wrapper">
        <header class="header df">
            <div class="header__body df">
                <div id="type-source"></div>
                <div id="type-loop">true</div>
                <div class="header__logo header__logo--path">
                    <a href="<?php echo $menu[0]['link_name']; ?>">utc@film</a><span class="header__mobile-hidden">:</span>
                    <span class="spec-violet header__mobile-hidden">~</span>
                    <span class="header__mobile-hidden">$</span>
                    <span class="header__text">
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link" data-lang="eng"><?php echo $menu[0]['name_eng']; ?></a>
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link" data-lang="ua"><?php echo $menu[0]['name_ua']; ?></a>
                    </span>
                    ->
                    <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link" data-lang="eng"><?php echo $menu[1]['name_eng']; ?></a>
                    <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link" data-lang="ua"><?php echo $menu[1]['name_ua']; ?></a>
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
                    <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link" data-lang="eng"><?php echo $menu[1]['name_eng']; ?></a>
                    <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link" data-lang="ua"><?php echo $menu[1]['name_ua']; ?></a>
                </div>
                <ul class="header__list">
                    <li class="header__link--current">
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link">
                            <span data-lang="eng"><?php echo $menu[0]['name_eng']; ?></span>
                            <span data-lang="ua"><?php echo $menu[0]['name_ua']; ?></span>
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
        <section class="main">
           <div class="message">
            <span class="message__pic">
                <svg viewBox="0 0 56 56" fill="none">
                    <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                    <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                    <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
                </svg>  
            </span>
            <span class="message__content">
                WE CREATE AD CAMPAIGNS <br>AND SHOOT THEM OURSELVES
            </span>
            <span class="message__pic">
                <svg viewBox="0 0 56 56" fill="none">
                    <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                    <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                    <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
                </svg>  
            </span>
        </div>
            <div class="grid">
                <div class="grid__item grid__item--middlewidth">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid1.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid2.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid3.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid7.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid6.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid4.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid5.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid8.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item grid__item--middlewidth">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid9.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid10.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid11.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid12.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid13.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid14.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid15.png" alt="portfolio preview">
                    </div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item grid__item--maxwidth">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid16.png" alt="portfolio preview">
                    </div>
                    <div class="grid__hot-pic"><img src="../media/fire.png" alt="hot"></div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid17.png" alt="portfolio preview">
                    </div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid18.png" alt="portfolio preview">
                    </div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid19.png" alt="portfolio preview">
                    </div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid20.png" alt="portfolio preview">
                    </div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid21.png" alt="portfolio preview">
                    </div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid22.png" alt="portfolio preview">
                    </div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid23.png" alt="portfolio preview">
                    </div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid24.png" alt="portfolio preview">
                    </div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="grid__preview">
                        <img src="../media/portfolio/grid25.png" alt="portfolio preview">
                    </div>
                    <div class="grid__overlay">
                        <a href="#">
                            <svg width="25" height="22" viewBox="0 0 25 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H6.06897V22H0V0ZM6.07031 2.27539H10.622V4.55078H15.1728V6.82617H19.7236V9.10156H24.2744V12.8947H19.7236V15.171H15.1728V17.4473H10.622V19.7237H6.07031V2.27539Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid__sizer"></div>
                <div class="grid__gutter-sizer"></div>
            </div>
           <div class="message message--bottom">WE DO ANYTHING IMAGINABLE
            THAT CAN BE WRITTEN FILMED
            DRAWN SUNG OR ANIMATED
            </div>
           <a class="btn" href="mailto:ukr.tv.film@gmail.com">{TEXT US}</a>
        </section>
    </div>
    <!-- <script src="../dist/works.js"></script> -->
    <?php get_footer(); ?>
</body>
</html>