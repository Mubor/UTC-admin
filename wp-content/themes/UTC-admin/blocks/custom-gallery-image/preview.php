<style>
    .preview-custom-gallery .img {
        width: 100%;
        height: 100%;
    }
</style>

<?php 
$preview = '<img src="'. wp_get_attachment_url('808') .'">';
?>
<div class="preview-custom-gallery">
    <?= $preview ?> 
</div>