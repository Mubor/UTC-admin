<?php 
$iframe = block_value('video-vimeo');
$heightRegex = '/height="[0-9]+"/';
$widthRegex = '/width="[0-9]+"/';

$code = preg_replace($heightRegex, ' ', $iframe);
$result = preg_replace($widthRegex, ' ', $code);
?>
        <div class="container--vimeo">
            <div class="container--inner">
                <?php echo $result ?>
            </div>
        </div>