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
    $hasil = (array_keys($arr,max($arr)));
    foreach($hasil as $item ){
        //echo $item . PHP_EOL;
        return $item;
    }
}

function bawah (array $arr)
{
    $hasil = (array_keys($arr, min($arr)));
    foreach ($hasil as $item) {
        return $item;
    }
}

echo 'waktu yg tepat untuk jual rujak : jam ' . atas($data) . PHP_EOL;
echo '' . PHP_EOL;
echo 'waktu yang tepat untuk beli rujak : jam ' . bawah($data) . PHP_EOL;
