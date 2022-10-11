<?php
function total($num1, $num2)
{
    return ($num1 + $num2);
}

echo total(10, 20);
echo "\n";
echo total(40, 50);
echo "\n";
echo total(30, 20);


//định hàm nặc danh - lambda
echo "\n";
$getTotal = function ($num1, $num2) {
    return $num1 + $num2;
};
echo $getTotal(30, 20);//50

//first citizen function
///hàm có thể sử dụng như một tham số,
///hàm có thể sử dụng như một giá trị biến
//callback function = closures

function getSub($func)
{
    echo "A";
    echo "B";
    echo "C";
    $func();
}

getSub(function () {
    echo "D";
});

getSub(function () {
    echo "E";
    echo "F";
});
?>

<script>
    const getTotal = function () {

    };

    //callback function -> hàm gọi lại
    //getSub -> higher order function
    //flexible
    function getSub(func) {
        console.log("A");
        console.log("B");
        console.log("C");
        func();
    };

    getSub(function () {
        console.log("D");
    });

    getSub(function () {
        console.log("E");
        console.log("F");
    });
</script>
