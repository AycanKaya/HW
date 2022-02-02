<?php
function triangle($int){

    $horitontal=1;
    while($horitontal<=$int){
        for ($i = 1; $i < $horitontal; $i++) {
            echo 0;

        }echo '<br>';

        $horitontal++;
    }

}
triangle(10);