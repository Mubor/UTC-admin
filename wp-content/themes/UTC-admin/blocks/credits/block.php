<?php
// if (file_exists("../../translating.php"))
include_once(dirname(__FILE__) . '/../../translating.php');

?>
    <div class="credits post__item <?php block_field('credits_select');?>">
        <div class="credits__item">
            <div class="credits__container">
                <div class="credits__inner-title">
                    <b><?= block_field('client_title_' . translator('eng', 'ua')); ?></b>
                    <b><?= block_field('agency_title_' . translator('eng', 'ua')); ?></b>
                </div>
                <?= block_field('text_area_client_agency_' . translator('eng', 'ua')); ?>
            </div>
        </div>
        <div class="credits__item">
            <div class="credits__container">
                <div class="credits__inner-title">
                    <b><?= block_field('production_title_' . translator('eng', 'ua')); ?></b>
                </div>
                <?= block_field('text_area_production_' . translator('eng', 'ua')); ?>
            </div>
        </div>
    </div>