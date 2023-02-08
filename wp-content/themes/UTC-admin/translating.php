<?php 
function translator($engText, $uaText) {
    if(isset($_COOKIE['lang'])) {
        $lang = $_COOKIE['lang'];
        return ($lang=='eng') ? $engText : $uaText;
    }
    else {
        return $engText;
    }
}
?>