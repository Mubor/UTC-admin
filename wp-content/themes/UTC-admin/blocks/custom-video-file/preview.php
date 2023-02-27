<!-- <style>
    video {
        width: 100%;
        height: 40vw;
        margin: 0 auto;
    }
</style> -->
<video preload="false" loop="true"  controls >
    <source src="<?php echo wp_get_attachment_url(block_field('video-file'));?>"> 
</video>
