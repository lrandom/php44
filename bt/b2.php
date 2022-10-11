<?php
function _limit($string)
{
    if (strlen($string) > 10) {
        echo substr($string, 0, 10) . "...";
    } else {
        echo $string;
    }
}

_limit("ábc");
?>