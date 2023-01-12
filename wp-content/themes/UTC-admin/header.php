<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php wp_head(); ?>
    
</head>
<body>
    <?php
            $pods = new Pod('menu_items');
            $pods->findRecords('id DESC', 114);
            $header_values = array();
            while ($pods->fetchRecord()) {
                $res = array(
                    "name_eng" => $pods->get_field('menu_item_text_eng'),
                    "name_ua" => $pods->get_field('menu_item_text_ua'),
                    "link_name" => $pods->get_field('menu_link')
                );
                array_push($header_values, $res);
            }    
    ?>