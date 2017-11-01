<?php 
$data = [
    0 => 4,
    1 => 2,
    2 => 5,
    3 => 8,
    4 => 3,
    5 => 9
];
 //var_dump(count($data));
 
function getMinMax($arr)
{
    $count_arr = count($arr);
    $min = $max = $arr[0];
    $nilaiMin;
    $nilaiMax;

    for ($x = 1; $x < $count_arr; $x++){
        if ($min > $arr[$x]){
            $min = $arr[$x];
        }
        if ($max < $arr[$x] ){
            $max = $arr[$x];
        }
    }
     return array(
            'ArrayMin' => $min,
            'ArrayMax' => $max,
    );
}

print_r(getMinMax($data));


//echo 'waktu yg tepat untuk jual rujak : jam ' . atas($data) . PHP_EOL;
//echo '' . PHP_EOL;
//echo 'waktu yang tepat untuk beli rujak : jam ' . bawah($data) . PHP_EOL;
