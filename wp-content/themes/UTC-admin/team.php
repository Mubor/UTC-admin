<?php
/*
 * Template Name: team
 */
    ob_start();
    include __DIR__ . '/classes/backend/app_gmail.php';
    get_header();
    include 'header.php';
    include 'translating.php';
    $menu = array_reverse($header_values);
?>

<style> 
    .app-dialog {
        display: none;
    }
    .team__text {
        color: <?= CFS()->get('title_color')?>
    }
    .team__params-item > .level > * {
        background-color: <?= CFS()->get('card-theme-1')?>;
    }



    .team__back, .team__name, 
    .team__link > a {
        color: <?= CFS()->get('card-theme-1')?>;
    }

    .team__item {
        background-color: <?= CFS()->get('card-theme-1')?> !important;
    }

    .team__front .team__button {
        color: <?= CFS()->get('card-theme-2')?>;
    }

    .team__back, .team__name {
        background-color: <?= CFS()->get('card-theme-2')?>;
    }

    .team__link {
        border: 1px solid <?= CFS()->get('card-theme-3')?>;
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
                        <a href="<?php echo $menu[0]['link_name'];?>" class="header__link" ><?php echo $menu[0][translator('name_eng', 'name_ua')]; ?></a>
                    </span>
                    ->
                    <a href="<?php echo $menu[2]['link_name'];?>" class="header__link" ><?php echo $menu[2][translator('name_eng', 'name_ua')]; ?></a>
                    <span class="type-cursor">|</span>
                </h1>
                <div class="header__menu-button">
                    <span id="menu-button"><?= translator('menu', 'меню') ?></span>
                </div>
            </div>
            <nav class="header__menu">
                <div class="header__menu-top">
                    <a href="<?php echo $menu[2]['link_name']; ?>" class="header__link" ><?php echo $menu[2][translator('name_eng', 'name_ua')]; ?></a>
                </div>
                <ul class="header__list">
                    <li class="header__link--current">
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link"><?php echo $menu[0][translator('name_eng', 'name_ua')]; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link"><?php echo $menu[1][translator('name_eng', 'name_ua')]; ?></a>
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
            <h2 class="title">
                <div class="title__pic" style="background: url(<?= CFS()->get('team_left_gif')?>) 60% 50% no-repeat; background-size: 100%;"></div>
                <div  class="title__text"><?= CFS()->get('team_title_' . translator('eng', 'ua'))?></div>
                <div class="title__pic" style="background: url(<?= CFS()->get('team_right_gif')?>) 60% 50% no-repeat; background-size: 100%;"></div>
            </h2>

            <div class="team">
                <?php 
                    $items = CFS()->get('cards');
                    $stroke = CFS()->get('card-theme-3');
                    $link_display = '';
                    foreach($items as $p) {
                        
                        if($p['card_links_display']){
                            $link_display = 'flex';
                        }
                        else {
                            $link_display = 'none';
                        }
                ?>
                <div class="team__item" style="background: url(<?= $p['static_photo']?>) <?= $p['static_photo_style_position']?> no-repeat; background-size: <?= $p['static_photo_style_scale'] ?>" onclick="">
                    <div class="team__front">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                show bio
                            </div>
                        </div>
                        <div class="team__gif" style = "transform: scale(<?= $p['gif_style_scale']?>) translate(<?= $p['gif_style_position']?>)"><img src="<?= $p['gif']?>" alt="gif"></div>
                        <p class="team__name"><?= $p['card_name_'. translator('eng', 'ua')]?></p>
                    </div>
                    <div class="team__back">
                        <div class="team__button">
                            <div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                <div class="svg">
                                    <svg width="64" height="64" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 10" viewport="0 0 100 100">
                                        <line x1="0" x2="0" y1="0" y2="6" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                        <line x1="0" x2="6" y1="0" y2="0" stroke="<?= $stroke?>" fill="transparent" stroke-width="1"></line>
                                    </svg>
                                </div>
                                close bio
                            </div>
                        </div>
                        <div class="inner">
                            <div class="team__info">
                                <h2 class="team__title"><?= $p['team_cards-title_' . translator('eng', 'ua')];?></h2>
                                <div class="team__params">
                                    <?php 
                                        $params = explode('<br />' ,$p['levels_' . translator('eng', 'ua')]);
                                        foreach($params as $_param) {
                                            $param = explode(':', $_param);
                                    ?>
                                    <div class="team__params-item">
                                        <div class="name"><?= $param[0] . ': ' ?></div>
                                        <div class="level"> 
                                            <?php 
                                                for($i = 0; $i < intval($param[1]); $i++) {
                                            ?>
                                            <div></div>
                                            <?php 
                                                }   
                                            ?>
                                        </div>
                                    </div>
                                    <?php 
                                        }   
                                    ?>
                                </div>
                            </div>
                            <div class="container" style="display: <?= $link_display?>;">
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
                    $imgs = CFS()->get('team_text_img');
                    $items = CFS()->get('team_bot_texts');
                    
                    foreach($items as $p) {
                        $text = $p['text_' . translator('eng', 'ua')];
                        
                        for($i = 0; $i< count($imgs); $i++) {
                            $search = '{' . $i . '}';
                            $replace = '<img src="' . $imgs[$i]['img'] . '" alt="text-media">';
                            $text = str_replace($search, $replace, $text);
                        }
                ?>
                    <p class="content__text" style="color: <?= $p['text_color'];?>"><?= $text;?></p>
                <?php       
                    }
                ?>    
            </div>
            <span class="btn" id="dialog-open-button"><?= CFS()->get('open_button_text_' . translator('eng', 'ua'));?></span>
        </section>
        
    </div>
    <div class="app-dialog" id="dialog">
        <div class="app-dialog__overlay">
          <div class="app-dialog__body">
            <div class="container">
                <!-- <div class="title">set up a meeting</div> -->
                <button id="close-button" data-lang="form-close"><?= translator('CLOSE', 'ЗАКРИТИ')?></button>
            </div>
            <form name="letter" method="post" action="#">
                <?php
                    $text = CFS()->get('form_text_' . translator('eng', 'ua'));
                    $input_option = CFS()->get('form_option');

                    $text_arr = explode('_', $text);
                ?>
                <span class="app-dialog__message"><?= $text_arr[0]?></span>
                <label for="fullname">
                    <input type="text" name="fullname" id="fullname" required><span class="error"></span>
                    <div class="placeholder"><?= translator('input your full name', 'введіть повне ім\'я')?></div>
                </label>
                <span class="app-dialog__message"><?= $text_arr[1]?></span>
                <label for="vacancy">
                    <select name="vacancy" id="vacancy" required>
                        <?php 
                    $options = CFS()->get('form_option');
                    foreach($options as $option) {
                        ?>
                    <option  value="<?= $option[translator('eng', 'ua')]?>"><?= $option[translator('eng', 'ua')]?></option>
                    <?php       
                    }
                    ?>  
                    </select><span class="error"></span>
                    <div class="placeholder"></div>
                </label>
                <span class="app-dialog__message"> <?= $text_arr[2]?></span>
                <label for="cv">
                    <input type="text" name="cv" id="cv" required><span class="error"></span>
                    <div class="placeholder"><?= translator('input link to your cv', 'введіть посилання на CV')?></div>
                </label>
                <span class="app-dialog__message"><?= $text_arr[3]?></span>
                <label for="phone">
                    <input type="tel" name="phone" id="phone" required><span class="error"></span>
                    <div class="placeholder"><?= translator('input your phone number', 'введіть номер телефону')?></div>
                </label>
                <span class="app-dialog__message"><?= $text_arr[4]?></span>
                <label  for="button">
                    <input type="submit" value="<?= $text_arr[5]; ?>" id="button" name="form_send">
                </label>
                <h2 id="message"></h2>
              </form>
          </div>
        </div>
    </div>
    <?php                 
        session_start();
        if(isset($_POST['form_send'])) {
            $full_name = $_POST['fullname'];
            $vacancy = $_POST['vacancy'];
            $cv = $_POST['cv'];
            $phone = $_POST['phone'];    

            send_email($full_name, $vacancy, $cv, $phone );      
            // header('Location: '. get_permalink(the_ID()));
            ob_end_flush();
        }
    ?>
<?php get_footer(); ?>
</body>
</html>
