<?php
function debug($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
function findArray(array $arr, int $number = 2 )
{
    foreach($arr as $value){
        if( is_array($value) ){
            foreach($value as $item){
                if(is_array($item)){
                    debug(array_slice($item, $number - 1, 1));
                }
            }
            debug(array_slice($value, $number - 1, 1));
        }
    }
}
function findString($str, string$litter = 'b')
{
    if(is_string($str)){
        return substr_count($str, $litter);
    }else{
        return false;
    }
}

function counter(array $arr)
{
    $sum = array_sum($arr);
    foreach($arr as $value){
        if( is_array($value) ){
            foreach($value as $item){
                if(is_array($item)){
                    $sum += array_sum($item);
                }
            }
            $sum += array_sum($value);
        }
    }
    debug($sum);
}

function cubeInCube(int$bigCube, int$smallCube)
{
    return $bigCube / $smallCube;
}