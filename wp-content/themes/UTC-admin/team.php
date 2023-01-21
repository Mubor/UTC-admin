<?php
/*
 * Template Name: team
 */
    include __DIR__ . '/classes/backend/app_gmail.php';
    // send_email();
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
        <section class="main">
            <div class="title">
                  <!-- add to background style team_title_media_1 team_title_media_2 -->
                <div class="title__pic" style="background: url(<?= CFS()->get('team_left_gif')?>) 60% 50% no-repeat; background-size: 100%;"></div>
                <div data-lang="eng" class="title__text"><?= CFS()->get('team_title_eng')?></div>
                <div data-lang="ua" class="title__text"><?= CFS()->get('team_title_ua')?></div>
                <div class="title__pic" style="background: url(<?= CFS()->get('team_right_gif')?>) 60% 50% no-repeat; background-size: 100%;"></div>
            </div>

            <div class="team">
                <?php 
                    $items = CFS()->get('cards');
                    foreach($items as $p) {
                ?>
                <div class="team__item" style="background: url(<?= $p['static_photo']?>) <?= $p['static_photo_style_position']?> no-repeat; background-size: <?= $p['static_photo_style_scale'] ?>" onclick="">
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
                        <div class="team__gif" style = "transform: scale(<?= $p['gif_style_scale']?>) translate(<?= $p['gif_style_position']?>)"><img src="<?= $p['gif']?>" alt="gif"></div>
                        <div class="team__name">
                            <span data-lang="eng"><?= $p['card_name_eng']?></span>
                            <span data-lang="ua"><?= $p['card_name_ua']?></span>
                        </div>
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
                        <div class="inner">
                            <div class="team__info">
                                <span data-lang="eng"><?= $p['card_description_eng']?></span>
                                <span data-lang="ua"><?= $p['card_description_ua']?></span>
                            </div>
                            <div class="container">
                                <div class="team__link"><a href="<?= $p['card_instagram_link']?>">Instagram</a></div>
                                <div class="team__link"><a href="<?= $p['card_facebook_link']?>">Facebook</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php       
                    }
                ?>    
            </div>
            <div class="content">
                <?php 
                    $items = CFS()->get('team_bot_texts');
                    foreach($items as $p) {
                ?>
                    <div class="content__text" style="color: <?= $p['text_color'];?>">
                        <span data-lang="eng"><?= $p['text_eng'];?></span>
                        <span data-lang="ua"><?= $p['text_ua'];?></span>
                    </div>
                <?php       
                    }
                ?>    
            </div>
            <!--find a solution to the problem with the pop-up window -->
            <span class="btn" id="dialog-open-button">
                <span data-lang="eng"><?= CFS()->get('open_button_text_eng');?></span>
                <span data-lang="ua"><?= CFS()->get('open_button_text_ua');?></span>
            </span>
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
                <?php
                    $text_eng = CFS()->get('form_text_eng');
                    $text_ua = CFS()->get('form_text_ua');
                    $input_option = CFS()->get('form_option');

                    $text_eng_arr = explode('_', $text_eng);
                    $text_ua_arr = explode('_', $text_ua);
                ?>
                <span class="app-dialog__message">
                    <span data-lang="eng"><?= $text_eng_arr[0]?></span>
                    <span data-lang="ua"><?= $text_ua_arr[0]?></span>
                </span>
                <label for="fullname">
                    <div class="placeholder">input your full name</div>
                    <input type="text" name="fullname" id="fullname" required><span class="error"></span>
                </label>
                <span class="app-dialog__message">
                    <span data-lang="eng"><?= $text_eng_arr[1]?></span>
                    <span data-lang="ua"><?= $text_ua_arr[1]?></span>
                </span>
                <label for="vacancy">
                    <div class="placeholder"></div>
                    <!-- <input type="email" name="email" id="email" required> -->
                    <select name="vacancy" id="vacancy" required>
                        <option value="" ></option>
                    <?php 
                    $options = CFS()->get('form_option');
                    foreach($options as $option) {
                ?>
                    <option data-lang="eng" value="<?= $option['eng']?>"><?= $option['eng']?></option>
                    <option data-lang="ua" value="<?= $option['ua']?>"><?= $option['ua']?></option>
                <?php       
                    }
                ?>  
                    </select><span class="error"></span>
                </label>
                <span class="app-dialog__message"> 
                    <span data-lang="eng"><?= $text_eng_arr[2]?></span>
                    <span data-lang="ua"><?= $text_ua_arr[2]?></span>
                </span>
                <label for="cv">
                    <div class="placeholder">input link to your CV</div>
                    <input type="text" name="cv" id="cv" required><span class="error"></span>
                </label>
                <span class="app-dialog__message">
                <span data-lang="eng"><?= $text_eng_arr[3]?></span>
                    <span data-lang="ua"><?= $text_ua_arr[3]?></span>
                </span>
                <label for="phone">
                    <div class="placeholder">input your phone number</div>
                    <input type="tel" name="phone" id="phone" ><span class="error"></span>
                </label>
                <span class="app-dialog__message">
                    <span data-lang="eng"><?= $text_eng_arr[4]?></span>
                    <span data-lang="ua"><?= $text_ua_arr[4]?></span>
                </span>
                <label data-lang="eng" for="button">
                    <input type="submit" value="<?= $text_eng_arr[5]; ?>" id="button">
                </label>
                <label data-lang="ua" for="button">
                    <input type="submit" value="<?= $text_ua_arr[5]; ?>" id="button">
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
