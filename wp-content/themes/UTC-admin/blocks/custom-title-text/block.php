
<?php 

include_once(dirname(__FILE__) . '/../../translating.php'); 
    $titles = block_value('title_keytext_' . translator('eng','ua'));
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
    <?= block_field('title_text_' . translator('eng','ua'))?>
    </div>
</div>