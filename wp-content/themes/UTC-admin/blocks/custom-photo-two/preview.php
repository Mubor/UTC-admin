<style>
    .post__item--photo-two  .inner
    {
        display: flex;
        justify-content: space-between;
    }
    .inner.photo-short-two-fullwidth,
    .inner.photo-tall-two-fullwidth {
        width: 100%;
    }    
    .inner.photo-short-two-halfwidth,
    .inner.photo-tall-two-halfwidth{
        /* width: 69.7vw; */
        margin: 0 auto;
    }

    .post__item--photo-one .container {
        width: 100%;
    }
    .inner.photo-two-fullwidth .container,
    .inner.photo-two-halfwidth .container{
        width: 49%;
    }
    .post__item .container img {
        width: 100%;
        height: 100%;
    }
    
</style>

<div class="post__item post__item--photo-two post__item--photo">
    <div class="inner <?php block_field('photo-size-two')?>">
        <div class="container"><img src="<?php block_field('photo-two-first') ?>" alt="photo"></div>
        <div class="container"><img src="<?php block_field('photo-two-second') ?>" alt="photo"></div>
    </div>
</div>