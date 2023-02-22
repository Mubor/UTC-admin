<style>
.container.container--file {
    width: 80%;
    margin: 0 auto;
}
</style>
<div class="container container--file">
        <video  preload="metadata" loop="true"  controls poster="">
            <source src="<?php echo wp_get_attachment_url(block_field('video-file'));?>"> 
        </video>
        </div>
