<?php
    include_once(dirname(__FILE__) . '/../../translating.php');
    include_once(dirname(__FILE__) . '/../../classes/getBoldTitleArray.php'); 
    $titles = block_value('video-title-' . translator('eng', 'ua'));
    $title = getBoldTitleArray($titles);
?>
<div class="post__item post__item-video post__item--text">
    <div class="inner--media inner--media-text <?php block_field('select-video-text-design')?>">
        <div class="container container--text">
            <p class="container--title"><?= $title?></p>
            <?php block_field('video-text-' . translator('eng', 'ua'))?>
        </div>
        <?php echo block_value('inner-added-videos')?>
    </div>
        
</div>