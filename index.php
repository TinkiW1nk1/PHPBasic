<?php
$arr = array_reverse(['one' => 1,'Two' => 2, 'Three' => 3, 'one' => null, null, 8 => 10, 'four' => 7,8]);
$sum = 0;
/*for ($i=0; $i<=count($arr); $i++) {
    if (!empty($arr[$i]) && is_int($arr[$i])) {

       $sum = $arr[$i] + $sum;
    }
}*/
//print_r($sum);
/*foreach ( $arr as $key => $value ) {
    print_r($key); echo ' ';
    var_dump($value);
    echo "<br>";
}*/
foreach ($arr as $key => $value){
    $arr1['newArr'][] = $value;
}
//var_dump($arr1);
//var_dump(array_sum($arr));
$arr3 = array_reverse(['one','two','tree','four']);
for($i = 1; $i <= 10; $i++){
    $array[] = $i;
}

function build($arr, $key, $array){
    if(empty($arr)){
        $result[$key] = $array;
    }else{
        $result[$key] = array_merge($array, $arr);
    }
    return $result;
}
foreach ($arr3 as $value){
    $array1 = build($array1, $value, $array) ;

};
echo '<pre>';
var_dump($array1);
echo '</pre>';