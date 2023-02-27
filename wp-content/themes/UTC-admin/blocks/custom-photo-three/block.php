<?php
include_once(dirname(__FILE__) . '/../../translating.php');
$titles = block_value('photo-three-title-' . translator('eng', 'ua'));
include_once(dirname(__FILE__) . '/../../classes/getBoldTitleArray.php'); 
    $title = getBoldTitleArray($titles)
?>
<div class="post__item post__item--photo-three post__item--photo post__item--text">
    <div class="inner <?php block_field('photo-three-text-position')?>">
        <div class="container container--text">
            <p class="container--title"><?= $title?></p>
            <?php block_field('photo-three-text-' . translator('eng', 'ua'))?>
        </div>
        <div class="container">
            <div class="container--media">
                <img src="<?php block_field('photo-three') ?>" alt="photo">
            </div>
        </div>
        
    </div>
</div>