<?php
$num = 20;
//truyền tham chiếu
function plusThirty(&$num1)
{
    $num1 += 30;
    return $num1;
}

plusThirty($num);
echo $num;
?>