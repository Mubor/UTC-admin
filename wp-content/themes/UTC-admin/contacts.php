<?php
/*
 * Template Name: contacts
 */ 
    ob_start();
    include __DIR__ . '/classes/backend/app_calendar.php';
    get_header();
    include 'header.php';
    include 'translating.php';
    $menu = array_reverse($header_values);
?>
<style>
    .info__text {
        color: <?= CFS()->get('info_text_color')?>
    }
</style> 
</head>
<body>
<div class="wrapper">
        <header class="header df">
            <div class="header__body df">
                <div id="type-source"></div>
                <div id="type-loop">true</div>
                <div class="header__logo header__logo--path">
                    <a href="<?= $menu[0]['link_name']; ?>">utc@film</a><span class="header__mobile-hidden">:</span>
                    <i class="header__mobile-hidden">~</i>
                    <span class="header__mobile-hidden">$</span>
                    <span class="header__text">
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link"><?php echo $menu[0][translator('name_eng', 'name_ua')]; ?></a>
                    </span>
                    ->  
                    <a href="<?php echo $menu[4]['link_name']; ?>" class="header__link"><?php echo $menu[4][translator('name_eng', 'name_ua')]; ?></a>
                    <span class="type-cursor">|</span>
                </div>
                <div class="header__menu-button">
                    <span id="menu-button"><?= translator('menu', 'меню') ?></span>
                </div>
            </div>
            <nav class="header__menu">
                <div class="header__menu-top">
                    <a href="<?php echo $menu[4]['link_name']; ?>" class="header__link"><?php echo $menu[4][translator('name_eng', 'name_ua')]; ?></a>
                </div>
                <ul class="header__list">
                    <li class="header__link--current">
                        <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link"><?php echo $menu[0][translator('name_eng', 'name_ua')]; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link"><?php echo $menu[1][translator('name_eng', 'name_ua')]; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $menu[2]['link_name']; ?>" class="header__link"><?php echo $menu[2][translator('name_eng', 'name_ua')]; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo $menu[3]['link_name']; ?>" class="header__link"><?php echo $menu[3][translator('name_eng', 'name_ua')]; ?></a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="main">
           <div class="contacts df">
            <?php 
                $left_text = CFS()->get('contacts_left_title_' . translator('eng', 'ua'));
                $left_link = CFS()->get('contacts_left_link');
                $right_text = CFS()->get('contacts_right_title_' . translator('eng', 'ua'));
                $right_link = CFS()->get('contacts_right_link');

                $left_title = explode('<br />', $left_text);
                $right_title = explode('<br />', $right_text);
            ?>
            <div class="contacts__item"> 
                <div class="contacts__title">
                    <b>
                        <span><?= $left_title[0]?></span>
                        <a class="contacts__link" href="<?= $left_link?>"><?= $left_title[1]?></a>
                    </b>
                </div>
                <?php 
                    $items = CFS()->get('services_left_list');
                    foreach($items as $li) {
                ?>
                    <div class="contacts__text" style="color:<?= CFS()->get('list_text_color') ?>"><?= $li['services_li_eng'];?></div>
                <?php       
                    }
                ?>    
            </div>
            <div class="contacts__item">
                <div class="contacts__title">
                    <b>
                        <span><?= $right_title[0]?></span>
                        <a class="contacts__link" href="<?= $right_link?>"><?= $right_title[1]?></a>
                    </b>
                </div>
                <?php 
                    $items = CFS()->get('services_right_list');
                    foreach($items as $li) {
                ?>
                    <div class="contacts__text" style="color:<?= CFS()->get('list_text_color')?>"> <?= $li['services_li_eng'];?></div>
                <?php       
                    }
                ?>    
            </div>
           </div>
           <div class="info">
            <?php 
                $data = CFS()->get('info_text');
                foreach($data as $item) {
            ?>
            <div class="info__text"><?= $item[translator('eng', 'ua')]?></div>
            <?php } ?>
            <div class="info__media" id="scroll-media">
                <img src="<?= CFS()->get('info_media')?>" alt="roof">
                <div class="info__button df" id="dialog-open-button">
                    <div class="info__pic"><?= $media_content; ?></div>
                    <span><?= CFS()->get('button_text_' . translator('eng', 'ua'))?></span>
                    <div class="info__pic"><?= $media_content; ?></div>
                </div>
            </div>
        </div>
        <div class="face">
            <svg viewBox="0 0 56 56" fill="none">
                <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
            </svg>
        </div>
        <div class="content" id="content"></div>
    </section>
    <footer class="footer footer--contacts">
        <div class="footer__body">
           <?php 
                $pods = new Pod('footer_link');
                $pods->findRecords('id DESC', 105);
                
                while ($pods->fetchRecord()) {
                    echo '<div class="footer__item"><a href="' . $pods->get_field('footer_link') .'" class="footer__link">' . $pods->get_field('footer_link_name') . '</a></div>';
                }
           ?>
        </div>
    </footer>
</div>
<div class="app-dialog" id="dialog">
    <div class="app-dialog__overlay">
        <div class="app-dialog__body">
            <div class="container">
                <!-- <div class="title">set up a meeting</div> -->
                <button id="close-button"><?= translator('CLOSE', 'ЗАКРИТИ')?></button>
            </div>
            <form name="data" method="post" action="">
                <?php
                    $text = CFS()->get('form_text_'. translator('eng', 'ua'));
                    $input_option = CFS()->get('form_option');

                    $text_arr = explode('_', $text);
                ?>
                <span class="app-dialog__message">
                    <span data-lang="eng"><?= $text_arr[0]?></span>
                </span>
                <label for="fullname">
                    <input type="text" name="fullname" id="fullname" value="" required>
                    <div class="placeholder"><?= translator('input your full name', 'введіть повне ім\'я')?></div>
                </label>
                <span class="app-dialog__message">
                    <span data-lang="eng"><?= $text_arr[1]?></span>
                </span>
                <label for="email">
                    <input type="email" name="email" id="email" value="" required><span class="error"></span>
                    <div class="placeholder"><?= translator('input your email', 'введіть вашу пошту')?></div>
                </label>
                <span class="app-dialog__message">
                    <span data-lang="eng"><?= $text_arr[2]?></span>
                </span>
                <label for="phone">
                    <input type="tel" name="phone" id="phone" value="" required><span class="error"></span>
                    <div class="placeholder"><?= translator('input your phone number', 'введіть номер телефону')?></div>
                </label>
                <span class="app-dialog__message">
                    <span data-lang="eng"><?= $text_arr[3]?></span>
                </span>
                <label for="time">
                    <input type="datetime-local" name="time" id="time" value="" style="" required><span class="error"></span>
                    <div class="placeholder"><?= translator('input date', 'введіть дату побачення')?></div>
                </label>
                <span class="app-dialog__message">
                    <span data-lang="eng"><?= $text_arr[4]?></span>
                </span>
                <label for="form_send">
                    <input type="submit" name="form_send" value="<?= $text_arr[5]?>" id="button">
                </label>
                <h2 id="message"></h2>
                <span class="app-dialog__message"></span>
            </form>
        </div>
    </div>
</div>
<?php       
    if(isset($_POST['time'])) {  
        date_default_timezone_set('Europe/Kyiv');
        $date_send = date("Y-m-d\TH:i");
        if($_POST['time'] < $date_send){
            } else {
                if(isset($_POST['form_send'] ) ) {
                    $fullname = $_POST['fullname'];
                    $email     = $_POST['email'];
                    $phone     = $_POST['phone']; 
                    $time     = $_POST['time']; 
                    setcookie('event_sended' , '1', time()+120);
                    send_calendar_event($fullname, $email, $phone,  $time);
                }
                echo '<script>window.location="https://calendar.google.com/calendar/u/0?cid=ODEwZmYzMTJiMjc2NDM2MjMyNmU3MzczNTRlMmY2MTNhZWFkODJkNDMzYWYzYzY5MzI5YzI3ZTFhNTc3Mzg0OEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t"</script>'; 
                            
            }
    }
    ob_end_flush();    
?>
<?php get_footer(); ?>

</body>
</html>




