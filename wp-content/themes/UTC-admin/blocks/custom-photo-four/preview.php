<style>
    .post__item--photo-four  .inner{
        display: flex;
        justify-content: space-between;
    }
    .inner.photo-tall-four-fullwidth {
        width: 100%;
    }
    .inner.photo-four-halfwidth{
        width: 69%;
        margin: 0 auto;
    }

    .post__item--photo-four .container {
        width: 24%;
    }
  
    .post__item .container img {
        width: 100%;
        height: 100%;
    }
</style>



<div class="post__item post__item--photo-four post__item--photo">
    <div class="inner <?php block_field('photo-size-four')?>">
        <div class="container"><img src="<?php block_field('photo-four-first') ?>" alt="photo"></div>
        <div class="container"><img src="<?php block_field('photo-four-second') ?>" alt="photo"></div>
        <div class="container"><img src="<?php block_field('photo-four-third') ?>" alt="photo"></div>
        <div class="container"><img src="<?php block_field('photo-four-fourth') ?>" alt="photo"></div>
    </div>
</div>