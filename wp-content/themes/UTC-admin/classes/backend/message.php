<?php

    function return_message($full_name, $vacancy, $cv, $phone){
            $message = '
            <!DOCTYPE html>
            <html>
            <head>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;margin:0 auto; color: black;}
                .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                overflow:hidden;padding:15px 12px;word-break:normal;}
                .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                font-weight:normal;overflow:hidden;padding:15px 12px;word-break:normal;}
                .tg .tg-7ya9{background-color:#c0c0c0;border-color:inherit;font-family:"Times New Roman", Times, serif !important;font-size:24px;
                font-weight:bold;text-align:left;vertical-align:top}
                .tg .tg-ytfs{border-color:inherit;font-family:"Times New Roman", Times, serif !important;font-size:24px;text-align:left;
                vertical-align:top}
                .title{color: black; background-color: white; font-weight:bold; font-family:"Times New Roman", Times, serif !important; font-size:36px; text-align:center; margin-bottom:20px}
            </style>
            </head>
            <body>
            <div class="title">Запит на співбесіду</div>
            <table class="tg">
            <thead>
            <tr>
                <th class="tg-7ya9">П.І.Б.</th>
                <th class="tg-ytfs">' . $full_name . '</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="tg-7ya9">Вакансія</td>
                <td class="tg-ytfs">' . $vacancy . '</td>
            </tr>
            <tr>
                <td class="tg-7ya9">Посилання на CV</td>
                <td class="tg-ytfs"><a href="' . $cv . '">' . $cv . '</a></td>
            </tr>
            <tr>
                <td class="tg-7ya9">Номер телефону</td>
                <td class="tg-ytfs">' . $phone . '</td>
            </tr>
            </tbody>
            </table>
            </body>
            </html>
        ';
        return $message;
        }
    

?>