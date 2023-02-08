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
    $type = block_value('select-video-design');
    $preview = '';
    if($type=='one-full-width') {
        $preview = '<img src="'. wp_get_attachment_url('577') .'">';
    } else if ($type=='one-medium-width') {
        $preview = '<img src="'. wp_get_attachment_url('578') .'">';
    } else if ($type=='one-small-width') {
        $preview = '<img src="'. wp_get_attachment_url('579') .'">';
    } else if ($type=='two-full-width') {
        $preview = '<img src="'. wp_get_attachment_url('582') .'">';
    } else if ($type=='two-half-width') {
        $preview =' <img src="'. wp_get_attachment_url('583') .'">';
    } else if ($type=='four-stories-width') {
        $preview = '<img src="'. wp_get_attachment_url('574') .'">';
    }

?>

<div class="preview-custom">
    <?= $preview?>
</div>

