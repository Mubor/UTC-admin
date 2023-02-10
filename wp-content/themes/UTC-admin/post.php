<?php
/*
 * Template Name: Single Page
 * Template Post Type: post,page
 */
get_header();
include 'header.php';
$menu = array_reverse($header_values);
include 'translating.php';

?>
<style>
    .message {
        color: <?php the_field('works_text_color') ?>
    }

    .btn {
        color: <?php the_field('works_button_color') ?>
    }

    .post {
        padding: 2.5% 2% 0;
    }

    .post__item {
        margin-bottom: 8%;
    }
</style>
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
                    <a href="<?php echo $menu[0]['link_name']; ?>" class="header__link"><?php echo $menu[0][translator('name_eng', 'name_ua')]; ?></a>
                </span>
                ->
                <a href="<?php echo $menu[1]['link_name']; ?>" class="header__link"><?php echo $menu[1][translator('name_eng', 'name_ua')]; ?></a>
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

    <style>
        /*last elem credits--terminal */
        .credits {}

        .credits.credits--border-flex,
        .credits.credits--flex {
            display: flex;
            flex-direction: row-reverse;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .credits:not(.credits--terminal) .credits__inner-title>b {
            display: block;
            width: fit-content;
        }

        .credits.credits--border-fullwidth .credits__item:first-child,
        .credits.credits--fullwidth .credits__item:first-child {
            margin-bottom: 1.9%;
        }

        .credits.credits--border-fullwidth .credits__item {
            width: 100%;
        }

        .credits.credits--fullwidth .credits__item {
            width: 100%;

        }

        .credits.credits--fullwidth .credits__item .credits__container {
            border: 0;
        }

        .credits.credits--flex .credits__item .credits__container {
            border: 0;
        }

        .credits.credits--flex .credits__item {
            width: 49.2%;
        }

        .credits.credits--flex .credits__item:first-child {
            margin-bottom: 3.4%;
        }

        .credits.credits--terminal .credits__item {
            width: 100%;

        }

        .credits.credits--terminal .credits__item:first-child {
            margin-bottom: 1.9%
        }

        .credits.credits--terminal .credits__item .credits__container {
            border: 0;

        }

        .credits.credits--terminal .credits__container {
            /* color:silver; */
            background-color: black;
            /* padding: 2.7vw 1.6vw; */
        }

        .credits.credits--terminal .credits__inner-title>span {
            display: block;
            width: fit-content;
        }

        .credits__container {
            border: 2px solid black;
            padding: 2.7vw 1.6vw 0;
        }

        .credits__item {
            width: 49.2%;
        }

        .credits__item:first-child .credits__inner-title *:first-child {
            margin-bottom: 5.5vw;
        }

        .credits--terminal .credits__inner-title>span {
            color: #3FED41;
        }

        .credits--terminal .credits__inner-title u,
        .credits.credits--terminal .credits__container {
            color: #B2B2B2;
        }


        .credits__container p {
            font-family: Montserrat;
            font-size: 2.5vw;
        }

        .credits__inner-title b {
            font-size: 3.3vw;
        }

        .credits__inner-title span {
            font-size: 3.3vw;
            font-family: AndaleMono;
        }

        .credits__container>*:not(p:last-child) {
            margin-bottom: 2.7vw;
        }

        .credits__container>p:last-child {
            padding-bottom: 2.7vw;
        }

        /* .post__item--vimeo {
            width: 80%;
            margin: 0 auto 8%; 
        } */
       
        .post__item--soundcloud >  iframe {
            width: 100%;
            /* object-fit: cover;  */
            /* position: absolute; */
           
        }
        /* .post__item--vimeo  {
            width: 80%;
            margin: 0 auto 8%; 
        } */
        /* .container--vimeo {
            width: 100%;
            height: 60vw
        } */

        @media screen and (max-width: 830px) {

            /* текст  шрифт в писклеях декстопа / 1.33  и / 3.75 или шрифт декстопа делить на 5 vw
 колонки row сделать column 
 */
            .credits.credits--border-flex {
                display: block;
            }

            .credits.credits--border-flex .credits__item:first-child {
                margin-bottom: 3.4%;
            }

            .credits.credits--border-flex .credits__item {
                width: 100%;

            }

            .credits.credits--flex {
                display: block;
            }

            .credits.credits--flex .credits__item:first-child {
                margin-bottom: 3.4%;
            }

            .credits.credits--flex .credits__item {
                width: 100%;

            }

            .credits.credits--border-fullwidth .credits__item:first-child,
            .credits.credits--fullwidth .credits__item:first-child {
                margin-bottom: 3.4%;
            }

            .credits.credits--terminal .credits__item:first-child {
                margin-bottom: 3.4%
            }

            .credits__container {
                border: 1px solid black;
                padding: 5vw 3.2vw 0;
            }

            .credits__container>p:last-child {
                padding-bottom: 5vw;
            }

            .credits__container>*:not(p:last-child) {
                margin-bottom: 4.6vw;
            }

            .credits__item:first-child .credits__inner-title>*:first-child {
                margin-bottom: 7.5vw;
            }


            .credits__container>p {
                font-size: 2.8vw;
            }

            .credits__inner-title>b,
            .credits__inner-title>span{
                font-size: 4.2vw;
            }
            
        } 
/* MOBILE EN|D */
        .post__item--photo .container, .container--file {
            position: relative;
        }

        .post__item--photo .container:not(.container--title, .container--text)::before, .container--file::before {
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            box-shadow: inset -2px -2px 0px #262626, inset 2px 2px 0px #F0F0F0, inset -4px -4px 0px #7E7E7E;
        }

        .post__item--photo-two .inner,
        .post__item--photo-four .inner,
        .post__item--photo-three .inner,
        .inner--media-text{
            display: flex;
            justify-content: space-between;
        }

        .inner--media-text.video-large-left,
        .inner--media-text.video-small-left {
            flex-direction: row-reverse;
        }

        .inner--media-text.video-large-left .container--file,
        .inner--media-text.video-large-right .container--file{
            height: 72vw;
        }

        .inner--media-text.video-small-right .container--file,
        .inner--media-text.video-small-left .container--file{
            height: 23.8vw;
        }

        .inner--media-text > * {
            width: 49%;
        }

        .photo-small-left,
        .photo-medium-left,
        .photo-large-left {
            flex-direction: row-reverse;
        }

        .inner.photo-short-two-fullwidth,
        .inner.photo-tall-two-fullwidth,
        .inner.photo-tall-four-fullwidth {
            width: 100%;
        }


        .inner.photo-short-two-halfwidth,
        .inner.photo-tall-two-halfwidth,
        .inner.photo-four-halfwidth {
            width: 69.7vw;
            margin: 0 auto;
        }

        .post__item--photo-one .container {
            width: 100%;
        }

        .inner.photo-short-two-fullwidth .container,
        .inner.photo-tall-two-fullwidth .container,
        .inner.photo-short-two-halfwidth .container,
        .inner.photo-tall-two-halfwidth .container,
        .post__item--photo-three .container {
            width: 49%;
        }

        .post__item .container img {
            width: 100%;
            height: 100%;
        }

        .photo-tall,
        .photo-short,
        .photo-small-right .container--media img {
            width: 100%;
        }

        .photo-short {
            height: 41.25vw;
        }

        .photo-tall {
            height: 61.25vw;
        }

        .photo-four-fullwidth .container {
            width: 22.63vw;
            height: 37.3vw;
        }

        .photo-four-halfwidth .container {
            width: 16.2vw;
            height: 23.81vw;
        }

        .photo-tall-two-fullwidth .container {
            height: 41.25vw;
        }

        .photo-short-two-halfwidth .container {
            height: 17.64vw;
        }

        .photo-tall-two-halfwidth .container {
            height: 34vw;
        }

        .photo-small-right .container--media,
        .photo-small-left .container--media {
            height: 24.6vw;
        }

        .photo-medium-right .container--media,
        .photo-medium-left .container--media {
            height: 41.25vw;
        }

        .photo-large-right .container--media,
        .photo-large-left .container--media {
            height: 71.1vw;
        }

        .post__item--text:not(.big-text) {
            font-size: 2.77vw;
        }

        .left-titled b:first-child {
            padding: 0 5% 0 2%;
            display: block;
            width: max-content;
        }

        .container--title {
            margin-bottom: 8%;
            font-size: 4.44vw;
        }

        .container--text p:not(.container--title) {
            font-family: Montserrat;
            line-height: 1.3;
        }

        /* .inner--media {
            width: 100%;
            height: 48vw;
        } */

        /* .container--vimeo,
    .container--vimeo > *
    {
        width: 100%;
        height: 100%;
    }

    .container--vimeo > div{
        padding: 0 !important;
    }

    .container--vimeo > div, .container--vimeo iframe{
        position: static !important;
    } */
        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            
        }
        .post__item.post__item--media {
            margin-bottom: 5.9%;
        }
        .inner--media.two-half-width ,
        .inner--media.four-stories-width{
            width: 69.4vw;
        }
        .inner--media.two-full-width,
        .inner--media.two-half-width,
        .inner--media.four-stories-width {
            display: flex;
            justify-content: space-between;
        }
        .inner--media.one-full-width .container,
        .inner--media.one-medium-width  .container,
        .inner--media.one-small-width  .container,
        .inner--media.four-stories-width,
        .inner--media.two-half-width{
            margin: 0 auto;
        }

        .inner--media.one-full-width > .container{
            width: 100%;
            height: 48.5vw;
        }
       
        .inner--media.one-medium-width > .container{
            width: 75%;
            height: 36.1vw;
           
        }
        .inner--media.one-small-width > .container{
            width: 49.3%;
            height: 23.9vw;
        }
        .inner--media.two-full-width > .container {
            width: 49%;
            height: 23.8vw; 
        }
        .inner--media.two-half-width > .container {
            width: 33.8vw;
            height: 17.4vw; 
        }
        
        .inner--media.four-stories-width > .container {
            width: 16.08vw;
            height: 23.8vw;
        }
        .inner--media.one-full-width > .post__item--vimeo {
            width: 100%;
            height: 48.5vw;
        }
        .inner--media.one-medium-width > .post__item--vimeo{
            width: 75%;
            height: 36.1vw;
            margin: 0 auto;
        }
        .inner--media.one-small-width > .post__item--vimeo{
            width: 49.3%;
            height: 23.9vw;
            margin: 0 auto;
        }
        .inner--media.two-full-width > .post__item--vimeo {
            width: 49%;
            height: 23.8vw; 
        }
        .inner--media.two-half-width > .post__item--vimeo {
            width: 33.8vw;
            height: 17.4vw; 
            margin: 0 auto;
        }
        .inner--media.four-stories-width > .post__item--vimeo {
            width: 16.08vw;
            height: 23.8vw;
            margin: 0 auto;
        }

        .container--vimeo {
            padding-top: 56.25%;
             height: 0px;
            position: relative;
        }
       .container--vimeo iframe {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }
        @media screen and (max-width: 830px) {
            .inner--media.two-half-width {
                width: 100%;
            }
            .inner--media.one-medium-width > .container,
            .inner--media.one-small-width > .container{
                width: 100%;
                height: 48.5vw;
            }
            .inner--media.two-full-width,
            .inner--media.two-half-width,
            .inner--media.four-stories-width {
            display: block;
            justify-content: space-between;
            }
            .inner--media.two-full-width > .container,
            .inner--media.two-half-width > .container{
                width: 80%;
                height: 50vw;
                margin: 0 auto;
            }
            .inner--media.two-full-width > .container:first-child,
            .inner--media.two-half-width > .container:first-child{
                margin-bottom: 6%;
            }
            .inner--media.four-stories-width > .container{
                width: 90%;
                height: 89vw;
                margin: 0 auto 6% ;
            }
            
            /* .inner--media.inner--media-text.video-large-left,
            .inner--media-text.video-small-left{
                
                flex-direction: column;
            }
            .inner--media.inner--media-text.video-large-right,
            .inner--media-text.video-small-right{
                flex-direction: column;
            }
            .inner--media.inner--media-text .container--text {
                margin-bottom: 8% ;
            }
            .container--title {
                width: 100%;
                margin-bottom: 11%;
                font-size: 11.8vw;
            }
            .container--text p:not(.container--title),
            .container--text{
                width: 100%;
                font-family: Montserrat;
                line-height: 1.3;
                font-size: 7.44vw;
            }
            /* .inner--media-text > * {
                width: 100%;
            } */
            /* .inner--media-text.video-small-right .container--file, 
            .inner--media-text.video-small-left .container--file {
                    width: 100%;
                    height: 65vw;
            }
            .inner--media-text.video-large-right .container--file, 
            .inner--media-text.video-large-left .container--file {
                    width: 100%;
                    height: 85vw;
            } */
             
         }
         /* MOBILE EN|D */
         
    </style>
    <div class="post">
        <?php the_content(); ?>
    </div>

    <?php get_footer(); ?>
    </body>

    </html>