

<?php 
    include_once(dirname(__FILE__) . '/../../translating.php');
    $media_format = block_value('media-format');
    $content = $media_format == 'svg' 
    ? block_value($media_format) 
    : '<img src="' . wp_get_attachment_image_url( block_value($media_format)) . '" alt="title-picture">' ;
?>

<div class="post__item">
    <div class="<?= block_field('title-type')?> post__title post__title--media">
        <span class="post__title-pic">
            <?= $content; ?>
        </span>
        <span class="post__title-pic--plus">
            <svg viewBox="0 0 30 30" fill="none">
                <path d="M30 13L30 18L-2.18557e-07 18L0 13L30 13Z" fill="#E46D29"/>
                <rect x="12" width="5" height="30" fill="#E46D29"/>
            </svg>
        </span>
        <span style="color:<?= block_field('title-color') ?>"><?= block_field('post_title_text_' . translator('eng', 'ua'))?></span>
        <span class="post__title-pic--plus">
            <svg viewBox="0 0 30 30" fill="none">
                <path d="M30 13L30 18L-2.18557e-07 18L0 13L30 13Z" fill="#E46D29"/>
                <rect x="12" width="5" height="30" fill="#E46D29"/>
            </svg>
        </span>
        <span class="post__title-pic">
            <?= $content; ?>
        </span>
    </div>
</div>
