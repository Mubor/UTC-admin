
<?php 
    include_once(dirname(__FILE__) . '/../../translating.php'); 
    include_once(dirname(__FILE__) . '/../../classes/getBoldTitleArray.php'); 
    $titles = block_value('title_keytext_' . translator('eng','ua'));
    $title = getBoldTitleArray($titles);
?>


<div class="post__item <?= block_field('title-text-type')?> post__item--text">
    <div class="container container--title">
        <?= $title?>
    </div>
    <div class="container">
    <?= block_field('title_text_' . translator('eng','ua'))?>
    </div>
</div>