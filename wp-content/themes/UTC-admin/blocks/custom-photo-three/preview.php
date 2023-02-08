<style>
    .is-root-container > * {
        margin: 2% 0 !important;
        max-width: unset;
    }
    .editor-styles-wrapper p {
    line-height: unset;
    }
    .post__item--photo .container {
        position: relative;
    }
    .post__item--photo .container:not(.container--title, .container--text)::before {
        position: absolute;
        content: '';
        width: 100%;
        height: 100%;
        box-shadow: inset -2px -2px 0px #262626, inset 2px 2px 0px #F0F0F0, inset -4px -4px 0px #7E7E7E;
    }

    .post__item--photo-two  .inner,
    .post__item--photo-four  .inner,
    .post__item--photo-three  .inner{
        display: flex;
        justify-content: space-between;
    }

    .photo-small-left,
    .photo-medium-left,
    .photo-large-left {
        flex-direction: row-reverse;
    }

    .inner.photo-short-two-fullwidth,
    .inner.photo-tall-two-fullwidth,
    .inner.photo-tall-four-fullwidth {
        width: 100%;
    }
    
    
    .inner.photo-short-two-halfwidth,
    .inner.photo-tall-two-halfwidth,
    .inner.photo-four-halfwidth{
        width: 69.7vw;
        margin: 0 auto;
    }

    .post__item--photo-one .container {
        width: 100%;
    }
    .inner.photo-short-two-fullwidth .container,
    .inner.photo-tall-two-fullwidth .container,
    .inner.photo-short-two-halfwidth .container,
    .inner.photo-tall-two-halfwidth .container,
    .post__item--photo-three .container{
        width: 49%;
    }
    .post__item .container img {
        width: 100%;
        height: 100%;
    }

    .photo-tall, .photo-short, 
    .photo-small-right .container--media img {
        width: 100%;
    }

    .photo-short {
        height: 41.25vw;
}

.photo-tall {
        height: 61.25vw;
}

    .photo-four-fullwidth .container {
        width: 22.63vw ;
        height: 37.3vw;
    }
    .photo-four-halfwidth .container {
        width: 16.2vw;
        height: 23.81vw;
    }
    .photo-tall-two-fullwidth .container {
        height: 41.25vw;
    }
    .photo-short-two-halfwidth .container {
        height: 17.64vw;
    }
    .photo-tall-two-halfwidth .container {
        height: 34vw;
    }

    .photo-small-right .container--media,
    .photo-small-left .container--media {
        height: 24.6vw;
    }
    .photo-medium-right .container--media,
    .photo-medium-left .container--media {
        height: 41.25vw;
    }
    .photo-large-right .container--media,
    .photo-large-left .container--media {
        height: 71.1vw;
    }

    .post__item--text:not(.big-text) {
        font-size: 2.77vw;
    }

    .left-titled  b:first-child {
        padding: 0 5% 0 2%; 
        display: block;
        width: max-content;
    }
    b {
        background-color: lime;
    }

    .container--title {
        margin: 0 0 8% 0;
        font-size: 4.44vw;
        
    }
    .container--text p:not(.container--title) {
        font-family: Montserrat;
        line-height: 1.3;
    }
</style>



<div class="post__item post__item--photo-three post__item--photo post__item--text">
    <div class="inner <?php block_field('photo-three-text-position')?>">
        <div class="container container--text">
            <p class="container--title left-titled"><b><?php block_field('photo-three-title-eng')?></b></p>
            <?php block_field('photo-three-text-eng')?>
        </div>
        <div class="container container--media"><img src="<?php block_field('photo-three') ?>" alt="photo"></div>
        
    </div>
</div>



