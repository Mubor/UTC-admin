<style>
    /* .preview-custom{
        width:100%;
        height: 10vw;
    } */
    .preview-custom .img {
        width: 100%;
        height: 100%;
    }
</style>

<?php 
    $type = block_value('select-video-text-design');
    $preview = '';
    if($type=='video-large-right') {
        $preview = '<img src="'. wp_get_attachment_url('575') .'">';
    } else if ($type=='video-small-right') {
        $preview = '<img src="'. wp_get_attachment_url('576') .'">';
    } else if ($type=='video-large-left') {
        $preview = '<img src="'. wp_get_attachment_url('581') .'">';
    } else if ($type=='video-small-left') {
        $preview = '<img src="'. wp_get_attachment_url('580') .'">';
    } 

?>

<div class="preview-custom">
    <?= $preview?>
</div>

