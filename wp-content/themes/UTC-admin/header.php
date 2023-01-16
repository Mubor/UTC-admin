<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style> 
        html {
            background-color: <?php the_field('page_color')?>;
        }

        /* HEADER COLOR STYLES */

        .header__logo > a {
            color: <?php the_field('logo_color')?>;
        }

        .header__logo > a:not(a:first-child),
        .header__logo, .header__text > a {
            color: <?php the_field('terminal_color')?>;
        }

        .header__logo > a:not(a:first-child):hover,
        .header__logo > .header__text a:hover {
            color: <?php the_field('terminal_hover_color')?>;
            transition: color .3s;
        }
        /* MENU COLOR SETTINGS */
        .header__menu-button, .header__link {
            color: <?php the_field('menu_desktop_color')?>;
        }

        .header__link:hover {
            color: <?php the_field('menu_desktop_color_hover')?>;
        }

        .header__menu-top>a {
            border-bottom: 2px solid <?php the_field('menu_mobile_color')?>;
        }
        .header__menu-top>a:hover {
            border-bottom-color: <?php the_field('menu_mobile_color_hover')?>;
        }
    
        @media  screen and (max-width: 830px) { 
            .header__link {
                color: <?php the_field('menu_mobile_color')?>;
            }
            .header__link:hover {
                color: <?php the_field('menu_mobile_color_hover')?>;
            }
        }

        /* HOEM NAV COLOR */

        .nav__link {
            color: <?php the_field('menu_mainpage_color')?>;
        }
        .nav__link:hover {
            color: <?php the_field('menu_mainpage_color_hover')?>;
        }

        i, b, u {
            font-style: normal;
            font-weight: normal;
        }

        /* violet */
        i {
            color:<?php the_field('i_color')?>;
        }
        
        /* orange */
        u {
            color: <?php the_field('u_color')?>;
        }

        b {
            font-family: AndaleMono;
            padding: 0 1%;
            background-color: <?php the_field('keytext_background')?>;
            color: <?php the_field('keytext_color')?>;
        }

        .team__text *:not(b ,i, u){
            color: <?= CFS()->get('gif_text_color')?>
        }

        .language, .language__elem, .language__elem>div {
            color: <?php the_field('language_color')?>;
        }
        
        .language__elem {
            border: 2px solid <?php the_field('page_color')?>;
        }
        .language__elem--current, .language__elem:hover {
            border: 2px solid <?php the_field('language_current_color')?>;
        }

        .language .language__elem--current, 
        .language .language__elem--current>div {
            color: <?php the_field('language_current_color')?>
        }

        .footer a {
            color: <?php the_field('footer_color')?>
        }
        .footer a:hover {
            color: <?php the_field('footer_color_hover')?>
        }
        /* MODAL WINDOW FORM */
        .app-dialog__message, input, select {
            color: <?= CFS()->get('form_text_color')?>;
        }
        .placeholder {
            color: <?= CFS()->get('form_placeholder_color')?>;
        }
        input:not(input[type="submit"]), select {
            border-bottom: 1px solid <?= CFS()->get('form_input_border-color')?>;
        }
        input[type="datetime-local"]:focus {
            color: <?= CFS()->get('form_text_color')?> !important;
        }

        #close-button {
            color: <?= CFS()->get('form_close-button_color')?>;
        }
        input[type="submit"] {
            color: <?= CFS()->get('form_submit-button_color')?>;
        }

    </style>
    <?php wp_head(); ?>
    
</head>
<body>
    <?php
        //get pods fields for menu
            $pods = new Pod('menu_items');
            $pods->findRecords('id DESC', 114);
            $header_values = array();
            while ($pods->fetchRecord()) {
                $res = array(
                    "name_eng" => $pods->get_field('menu_item_text_eng'),
                    "name_ua" => $pods->get_field('menu_item_text_ua'),
                    "link_name" => $pods->get_field('menu_link')
                );
                array_push($header_values, $res);
            }    
        // get page additional media 

        $media_type = get_field('media_type');
        $media_content = '';
        if ($media_type == 'SVG') {
            $media_content = get_field('media_svg');
        } else {
            $media_content = '<img src="' . get_field('media_img') . '" alt="additional">';
        }

    ?>