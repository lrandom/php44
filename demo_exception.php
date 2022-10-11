<?php
function divide($num1, $num2)
{
    if ($num2 == 0) {
        throw new Exception("Số chia không thể bằng 0, hihi");
    }
    return $num1 / $num2;
}

echo divide(10, 2);
try {
    echo divide(10, 0);
} catch (Exception $exception) {
    echo $exception->getMessage();//trả về nội dung thông báo lỗi
    echo $exception->getLine();//exception xảy ra ở dòng lệnh nào
    echo $exception->getFile();//exception xảy ra ở file nào
    var_dump($exception->getTrace());
    echo "Hihi, nhập lại đi";
}
