<?php
/*
 * Template Name: team
 */
    get_header();
    include 'header.php';
    $menu = array_reverse($header_values);
?>

<!-- <body> -->
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
                    <a href="<?php echo $menu[2]['link_name']; ?>" class="header__link" data-lang="eng"><?php echo $menu[2]['name_eng']; ?></a>
                    <a href="<?php echo $menu[2]['link_name']; ?>" class="header__link" data-lang="ua"><?php echo $menu[2]['name_eng']; ?></a>
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
        <section class="main">
            <div class="title">
                <div class="title__pic"></div>
                <div class="title__text">choose your fighter</div>
                <div class="title__pic"></div>
            </div>

            <div class="team">
                <div class="team__item" onclick="">
                    <div class="team__front">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                show bio
                            </div>
                        </div>
                        <div class="team__gif"><img src="../media/team/volodymyr.gif" alt="gif"></div>
                        <div class="team__name">Volodymyr Veselov</div>
                    </div>
                    <div class="team__back">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                close bio
                            </div>
                        </div>
                        <div class="team__info">Alexander veselov is consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus.Quam ac convallis tellus metus faucibus a felis netus.</div>
                        <div class="container">
                            <div class="team__link"><a href="">Instagram</a></div>
                            <div class="team__link"><a href="">Facebook</a></div>
                        </div>
                    </div>
                </div>
                <div class="team__item" onclick="">
                    <div class="team__front">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                show bio
                            </div>
                        </div>
                        <div class="team__gif"><img src="../media/team/oleksandr.gif" alt="gif"></div>
                        <div class="team__name">Olexander Veselov</div>
                    </div>
                    <div class="team__back">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                close bio
                            </div>
                        </div>
                        <div class="team__info">Alexander veselov is consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus.Quam ac convallis tellus metus faucibus a felis netus.</div>
                        <div class="container">
                            <div class="team__link"><a href="">Instagram</a></div>
                            <div class="team__link"><a href="">Facebook</a></div>
                        </div>
                    </div>
                </div>
                <div class="team__item" onclick="">
                    <div class="team__front">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                show bio
                            </div>
                        </div>
                        <div class="team__gif"><img src="../media/team/sonya.gif" alt="gif"></div>
                        <div class="team__name">Sonya Sytnik</div>
                    </div>
                    <div class="team__back">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                close bio
                            </div>
                        </div>
                        <div class="team__info">Alexander veselov is consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus.Quam ac convallis tellus metus faucibus a felis netus.</div>
                        <div class="container">
                            <div class="team__link"><a href="">Instagram</a></div>
                            <div class="team__link"><a href="">Facebook</a></div>
                        </div>
                    </div>
                </div>
                <div class="team__item" onclick="">
                    <div class="team__front">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                show bio
                            </div>
                        </div>
                        <div class="team__gif"><img src="../media/team/hidden.gif" alt="hidden"></div>
                        <div class="team__name">Hidden Charachter</div>
                    </div>
                    <div class="team__back">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                close bio
                            </div>
                        </div>
                        <div class="team__info">Alexander veselov is consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus.Quam ac convallis tellus metus faucibus a felis netus.</div>
                        <div class="container">
                            <div class="team__link"><a href="">Instagram</a></div>
                            <div class="team__link"><a href="">Facebook</a></div>
                        </div>
                    </div>
                </div>
                <div class="team__item" onclick="">
                    <div class="team__front">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                show bio
                            </div>
                        </div>
                        <div class="team__gif"><img src="" alt=""></div>
                        <div class="team__name">Hidden Character</div>
                    </div>
                    <div class="team__back">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                close bio
                            </div>
                        </div>
                        <div class="team__info">Alexander veselov is consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus.Quam ac convallis tellus metus faucibus a felis netus.</div>
                        <div class="container">
                            <div class="team__link"><a href="">Instagram</a></div>
                            <div class="team__link"><a href="">Facebook</a></div>
                        </div>
                    </div>
                </div>
                <div class="team__item" onclick="">
                    <div class="team__front">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                show bio
                            </div>
                        </div>
                        <div class="team__gif"><img src="../media/team/sasha.gif" alt="gif"></div>
                        <div class="team__name">Olexandra Lyashenko</div>
                    </div>
                    <div class="team__back">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                close bio
                            </div>
                            
                        </div>
                        <div class="team__info">Alexander veselov is consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus.Quam ac convallis tellus metus faucibus a felis netus.</div>
                        <div class="container">
                            <div class="team__link"><a href="">Instagram</a></div>
                            <div class="team__link"><a href="">Facebook</a></div>
                        </div>
                    </div>
                </div>
                <div class="team__item" onclick="">
                    <div class="team__front">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                show bio
                            </div>
                        </div>
                        <div class="team__gif"><img src="../media/team/hidden.gif" alt="hidden"></div>
                        <div class="team__name">Hidden Charachter</div>
                    </div>
                    <div class="team__back">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                close bio
                            </div>
                        </div>
                        <div class="team__info">Alexander veselov is consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus.Quam ac convallis tellus metus faucibus a felis netus.</div>
                        <div class="container">
                            <div class="team__link"><a href="">Instagram</a></div>
                            <div class="team__link"><a href="">Facebook</a></div>
                        </div>
                    </div>
                </div>
                <div class="team__item" onclick="">
                    <div class="team__front">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                show bio
                            </div>
                        </div>
                        <div class="team__gif"><img src="../media/team/oksana.gif" alt="gif"></div>
                        <div class="team__name">Oksana Petrivna</div>
                    </div>
                    <div class="team__back">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="#E46D29" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                close bio
                            </div>
                        </div>
                        <div class="team__info">Alexander veselov is consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac in urna, lacinia libero aliquam. Id tempor vulputate viverra est, nunc sed egestas lorem. Quam ac convallis tellus metus faucibus a felis netus.Quam ac convallis tellus metus faucibus a felis netus.</div>
                        <div class="container">
                            <div class="team__link"><a href="">Instagram</a></div>
                            <div class="team__link"><a href="">Facebook</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <p class="content__text">UTC FILM IS A UNIQUE COMMUNITY THAT RESEMBLES THE 🧑‍🎨 CREATIVE ASSOCIATION MORE THAN A CLASSIC AGENCY.</p>
                <p class="content__text">WE CREATE ADVERTISING CAMPAIGNS AND 🎥 SHOOT THEM OURSELVES, HAVING TWO INDEPENDENT UNITS: CREATIVE AND VIDEO PRODUCTION, WHERE CREATORS AND PRODUCERS WORK LIKE TWO LEGS OF THE SAME CAPYBARA 🦫 - FROM THE IDEA TO ITS FULL IMPLEMENTATION. </p>
                <p class="content__text">WE PRODUCE LARGE AND SMALL PROJECTS FOR UKRAINIAN AND 🌍 GLOBAL BRANDS, EMBODYING BOLD IDEAS THAT MOVE BUSINESSES FORWARD AND HELP BRANDS FIND THEIR INIMITABLE PATH AND SHINE BRIGHTLY IN A WORLD FULL OF DARKNESS✨</p>
            </div>
            <span class="btn" id="dialog-open-button">{UTC++}</a>
        </section>
    </div>
    <div class="app-dialog" id="dialog">
        <div class="app-dialog__overlay">
          <div class="app-dialog__body">
            <div class="container">
                <!-- <div class="title">set up a meeting</div> -->
                <button id="close-button" data-lang="form-close">CLOSE</button>
            </div>
            <form name="letter" method="post">
                <span class="app-dialog__message">HI THERE! MY NAME IS</span>
                <label for="fullname">
                    <div class="placeholder">input your full name</div>
                    <input type="text" name="fullname" id="fullname" required><span class="error"></span>.
                </label>
                <span class="app-dialog__message"> I AM</span>
                <label for="vacancy">
                    <div class="placeholder"></div>
                    <!-- <input type="email" name="email" id="email" required> -->
                    <select name="vacancy" id="vacancy">
                        <option value="creative">CREATIVE</option>
                        <option value="new business">NEW BUSINESS</option>
                        <option value="intern">INTERN</option>
                    </select><span class="error"></span>.
                </label>
                <span class="app-dialog__message"> I REALLY LIKE WHAT YOU DO SO I WANT TO BE PART OF YOUR TEAM. I WILL LEAVE A LINK HERE TO MY PORTFOLIO/CV</span>
                <label for="cv">
                    <div class="placeholder">input link to your CV</div>
                    <input type="text" name="cv" id="cv" ><span class="error"></span>.
                </label>
                <span class="app-dialog__message"> AND PHONE NUMBER</span>
                <label for="phone">
                    <div class="placeholder">input your phone number</div>
                    <input type="tel" name="phone" id="phone" ><span class="error"></span>.
                </label>
                <span class="app-dialog__message"> LET A SPARK FLY BETWEEN US. I'M LOOKING FORWARD TO! (YOUR FUTURE FRIEND).</span>
                <label for="button">
                    <input type="submit" value="JOIN OUR TEAM" id="button">
                </label>
                <h2 id="message"></h2>
              </form>
          </div>
        </div>
    </div>
    <!-- <script src="../dist/team.js"></script> -->
    <?php get_footer(); ?>
</body>
</html>
