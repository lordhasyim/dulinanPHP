<?php 
$data = [
    0 => 4,
    1 => 2,
    2 => 5,
    3 => 8,
    4 => 3,
    5 => 9
];
 //var_dump($data);

function atas(array $arr) 
{
    rsort($arr);
    $count_arr = count($arr);
    for ($x=0; $x >= $count_arr; $x++) {
        echo $arr[x] . PHP_EOL;
    }
    return $arr;
}

print_r(atas($data));