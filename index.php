<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $first_num = 100;
        $second_num = 200;
        $tmp = $first_num;
        $first_num = $second_num;
        $second_num = $tmp;
        print("$first_num $second_num");
        print("Hello" . " " . "world");
        ?>
    </body>
</html>
