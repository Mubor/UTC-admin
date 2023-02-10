<?php
// if (file_exists("../../translating.php"))
include_once(dirname(__FILE__) . '/../../translating.php');

?>
<div class="post__item post__item--photo-three post__item--photo post__item--text">
    <div class="inner <?php block_field('photo-three-text-position')?>">
        <div class="container container--text">
            <p class="container--title left-titled"><b><?php block_field('photo-three-title-' . translator('eng', 'ua'))?></b></p>
            <?php block_field('photo-three-text-' . translator('eng', 'ua'))?>
        </div>
        <div class="container container--media"><img src="<?php block_field('photo-three') ?>" alt="photo"></div>
        
    </div>
</div>