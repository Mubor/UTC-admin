<style>

    .post__item--photo .container {
        position: relative;
    }

    .post__item--photo-two .inner,
    .post__item--photo-four .inner,
    .post__item--photo-three .inner {
        display: flex;
        justify-content: space-between;
    }

    .post__item--photo-one .container {
        width: 100%;
    }

    .post__item--photo-three .container {
        width: 49%;
    }

    .post__item .container img {
        width: 100%;
        height: 100%;
    }

    .photo-left {
        flex-direction: row-reverse;
    }

    .post__item--text:not(.big-text) {
        font-size: 25px;
    }

    .left-titled b:first-child {
        padding: 0 5% 0 2%;
        display: block;
        width: max-content;
    }

    b {
        background-color: lime;
    }

    .container--title {
        margin: 0 0 8% 0;
        font-size: 35px;
    }

    .container--text p:not(.container--title) {
        font-family: Montserrat;
        line-height: 1.3;
    }
</style>

<?php 
    include_once(dirname(__FILE__) . '/../../classes/getBoldTitleArray.php'); 
    $titles = block_value('photo-three-title-eng');
    $title = getBoldTitleArray($titles);
?>

<div class="post__item post__item--photo-three post__item--photo post__item--text">
    <div class="inner <?php block_field('photo-three-text-position') ?>">
        <div class="container container--text">
            <p class="container--title left-titled"><?= $title ?></p>
            <?php block_field('photo-three-text-eng') ?>
        </div>
        <div class="container">
            <div class="container--media">
                <img src="<?php block_field('photo-three') ?>" alt="photo">
            </div>
        </div>

    </div>
</div>