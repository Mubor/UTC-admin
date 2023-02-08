<style>
    .post__item--text {
        font-family: Montserrat;
    }

    .big-text {
        font-size: 60px;
        text-transform: uppercase;
    }

    .post__item .container:not(.container--title) > p {
        margin: 0 0 20px 0;
    }
    
    .left-titled, .right-titled {
        display: flex;
        justify-content: space-between;
        font-size: 25px;
    }
    .left-titled > .container:not(.container--title), 
    .right-titled > .container:not(.container--title) {
        width: 50%;
    }

    .right-titled {
        flex-direction: row-reverse;
    }

    b {
        background-color: lime;
    }

    .right-titled .container--title,
    .left-titled .container--title {
        display: flex;
        flex-direction: column;
    }
    .right-titled .container--title{
        align-items: flex-end;
    }
    .left-titled .container--title {
        align-items: flex-start;
    }

    .right-titled  b,
    .left-titled b {
        width: min-content;
        padding: 0 2% 0 2%;
        
    }
    .right-titled  b:first-child,
    .left-titled  b:first-child {
        width: max-content;
    }
    .right-titled  b:first-child {
        padding: 0 2% 0 10%;
    }
    .left-titled  b:first-child {
        padding: 0 10% 0 2%;
    }
    </style>

<?php 
    $titles = block_value('title_keytext_eng');
    $titles_arr = explode('<br />', $titles);
    $title ='';
    foreach($titles_arr as $element) {
        $title = $title . '<b>' . $element . '</b>';
    }
?>

<div class="post__item <?= block_field('title-text-type')?> post__item--text">
<div class="container container--title">
        <?= $title?>
    </div>
    <div class="container">
        <?= block_field('title_text_eng')?>
    </div>
</div>