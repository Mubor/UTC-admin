<style>
.big-center, .big-left, .big-right {
    font-weight: normal;
    font-size: 40px !important;
}
.big-left, .left-plus {
    text-align: left;
}
.big-right, .right-plus {
    text-align: right;
}
.big-center, .center-plus {
    text-align: center;
}

.left-plus, .right-plus, .center-plus {
    font-size: 35px !important;
}

.left-plus .post__title-media,
.right-plus .post__title-media,
.center-plus .post__title-media, 
.post__title-media--plus {
    display: none;
}

.post__title-media--plus {
    width: 2.5%;
}

.left-plus>.post__title-media--plus:nth-child(2) {
    display: inline-block;
}
.right-plus>.post__title-media--plus:nth-child(4) {
    display: inline-block;
}
.center-plus>.post__title-media--plus {
    display: inline-block;
}

.post__title-media {
    display: inline-block;
    width: 3.5%;
}

.post__title-media > *,
.post__title-media > svg{
    width: 100%;
}

.post__title-media:last-child > * {
    transform: rotate(180deg);
}



</style>


<?php 
    $media_format = block_value('media-format');
    $content = $media_format == 'svg' 
    ? block_value($media_format) 
    : '<img src="' . wp_get_attachment_image_url( block_value($media_format)) . '" alt="title-picture">' ;
?>

<div class="post__item">
    
    <div class="<?= block_field('title-type')?> post__title">
        <span class="post__title-media">
            <?= $content; ?>
        </span>
        <span class="post__title-media--plus">
            <svg viewBox="0 0 30 30" fill="none">
                <path d="M30 13L30 18L-2.18557e-07 18L0 13L30 13Z" fill="#E46D29"/>
                <rect x="12" width="5" height="30" fill="#E46D29"/>
            </svg>
        </span>
        <span style="color:<?= block_field('title-color') ?>"><?= block_field('post_title_text_eng')?></span>
        <span class="post__title-media--plus">
            <svg viewBox="0 0 30 30" fill="none">
                <path d="M30 13L30 18L-2.18557e-07 18L0 13L30 13Z" fill="#E46D29"/>
                <rect x="12" width="5" height="30" fill="#E46D29"/>
            </svg>
        </span>
        <span class="post__title-media">
            <?= $content; ?>
        </span>
    </div>
</div>