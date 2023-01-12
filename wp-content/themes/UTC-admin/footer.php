<?php 
wp_footer(); 
include 'classes/getPodNotes.php'
?>

<footer class="footer">
            <div class="footer__body">
               <?php 
                    $pods = new Pod('footer_link');
                    $pods->findRecords('id DESC', 105);
                    while ($pods->fetchRecord()) {
                        echo '<div class="footer__item"><a href="' . $pods->get_field('footer_link') .'" class="footer__link">' . $pods->get_field('footer_link_name') . '</a></div>';
                    }
               ?>
            </div>
</footer>

