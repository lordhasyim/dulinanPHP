 <?php
 $list = array(3,4,2,5,6,7,8,2,5,1,4,4,6);
    function min_and_max($list)
    {
        $len = count($list);
        $minimum = $maximum = $list[0];
        for ($i = 1; $i < $len; $i++) {
            if ($minimum > $list[$i]) {
                $minimum = $list[$i];
            }
            if ($maximum < $list[$i]) {
                $maximum = $list[$i];
            }
        }
        return array('minimum' => $minimum, 'maximum' => $maximum);
    }
    var_dump(min_and_max($list));