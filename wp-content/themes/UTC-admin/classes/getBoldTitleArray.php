<?php 
    function getBoldTitleArray($titles) {
        $titles_arr = explode('<br />', $titles);
        $title ='';
        foreach($titles_arr as $element) {
            $title = $title . '<b>' . $element . '</b>';
        }
        return $title;
    }

?>