<style>
.big-center, .big-left, .big-fill, .big-right {
    font-weight: normal;
    font-size: 40px !important;
}
.big-left {
    text-align: left;
}
.big-right {
    text-align: right;
}
.big-center {
    text-align: center;
}

.big-fill  b {
    display: block;
    text-align: center;
}

b {
    background-color: lime;
}
</style>

<div class="post__item">
    <div class="<?= block_field('title-type')?> post__title">
        <b><?=block_field('post_title_text_eng')?></b>
    </div>
</div>