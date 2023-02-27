
<style>
 .post__item--photo-one .container {
        width: 100%;
    }
  
.post__item .container img {
        width: 100%;
        height: 100%;
    }

.photo-tall, .photo-short, 
.photo-small-right .container--media img {
        width: 100%;
    }

</style>



<div class="post__item post__item--photo-one post__item--photo">
    <div class="container <?php block_field('photo-size');?>"><img src="<?php wp_get_attachment_image_url( block_field('photo-fullwidth-one')) ?>" alt="photo"></div>
</div>
