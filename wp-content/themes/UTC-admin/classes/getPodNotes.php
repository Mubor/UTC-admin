<?php
    function insertItemsFromPod($podname, $podID) {
        $pods = new Pod($podname);
        $pods->findRecords('id DESC', $podID);
        while ($pods->fetchRecord()) {
            echo '<div class="footer__item"><a href="' . $pods->get_field('footer_link') .'" class="footer__link">' . $pods->get_field('footer_link_name') . '</a></div>'; //Create a link to each different book
        }
    }
?>