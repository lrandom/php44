<?php
$arr = [
    "user1" => [
        "name" => "Nam",
        "address" => "Ha Noi"
    ],
    "user2" => [
        "name" => "Linh",
        "address" => "Hai Phong"
    ]
];
/*
echo $arr["user2"]["address"];
foreach ($arr as $kUser=>$vUser) {
    foreach ($vUser as $k => $value) {
        echo $value;
    }
}*/

$arr2 = [
    [1, 2, 3, 3, 23, 223],
    [121, 32434, 54545,
        [
            1212, 12, 12, 34434]
    ]
];
//echo $arr2[1][3][3]//34434

$arr3 = [
    [1, 2, 23, 232],
    [
        "user" => [
            "address" => "Ha Noi"
        ]
    ]
];

var_dump($arr3);