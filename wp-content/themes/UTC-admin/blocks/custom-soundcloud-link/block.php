<?php
  $iframe = block_value('souncloud-link');
  $widthRegex = '/width="[0-9]+%"+ height="[0-9]+"/m';
  $disableCommentsRegex = '/&show_comments=[a-z]++&show_user=[a-z]+/';
  $code_next = preg_replace($disableCommentsRegex, '&show_comments=false&show_user=false', $iframe);
  $result = preg_replace($widthRegex, '', $code_next);
?>

<div class="<?php block_field('select-audio-design')?>"> 
  <?php echo  $result ?>
</div> 


