<?php

echo narcissistic(1634);
echo findNeedle(array('red','blue'), 'red');
$d = blueOcean(array(1,5,5,5,5,3), 5);

print_r($d);

function narcissistic($number) {
    $len = strlen($number);
    $split = str_split($number);
    $narcissistic = 0;

    for ($i=0; $i < $len; $i++) { 
        $val = pow($split[$i], $len);
        $narcissistic = $narcissistic + $val;
    }

    if($narcissistic == $number)
        return 'TRUE';
    else
        return 'FALSE';
}


function findNeedle($data, $params) {
    if(is_array($data))
    {
        $data = array_flip($data);
        return $data[$params];
    }
}

function blueOcean($data, $params) {
    foreach ($data as $key => $value) 
    {
        if($value == $params){
            unset($data[$key]);
        }
    }

    return $data;
}