<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

echo 'посчитать длину массива' . "<br>";
print_r(count($arr));
echo "<br>";

echo 'переместить первые 4 элемента массива в конец массива' . "<br>";
for ( $i = 0; $i < 4; $i++ ){
    $shift = array_shift($arr);
    $arr[] = $shift;
}
print_r($arr);
echo "<br>";

echo 'получить сумму 4,5,6 элемента' . "<br>";
$countArr = array_slice($arr, 4,3);
print_r(array_sum($countArr));
echo "<br>";

$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];

echo 'найти все элементы которые отсутствуют в первом массиве и присутствуют во втором' . "<br>";
foreach ( $secondArr as $key => $value ){
    if(!key_exists( $key, $firstArr) ){
      echo $key . ' - ' . $value . "<br>";
    }
}
echo 'найти все элементы которые присутствую в первом и отсутствуют во втором' . "<br>";
foreach ( $firstArr as $key => $value ){
    if( !key_exists($key, $secondArr )){
        echo $key . ' - ' . $value . "<br>";
    }
}
echo 'найти все элементы значения которых совпадают' . "<br>";
foreach ( $firstArr as $key => $value ){
   if ( array_search($value, $secondArr) ){
       echo $key . ' ' . $value . "<br>";
   }
}

echo 'найти все элементы значения которых отличается' . "<br>";

foreach ( $firstArr as $key => $value ){
    if ( !array_search($value, $secondArr) ){
        echo $key . ' ' . $value . "<br>";
    }
}
//для того что бы вывести елементы которых нету в масиве $firstArr но есть в масиве $secondArr
foreach ( $secondArr as $key => $value ){
    if ( !array_search($value, $firstArr) ){
        echo $key . ' ' . $value . "<br>";
    }
}

$firstArr = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => 2,

    ],

    'foure' => 5,

    'five' => [

        'three' => 32,

        'foure' => 5,

        'five' => 12,

    ],

];



echo 'получить все вторые элементы вложенных массивов' . "<br>";
foreach ( $firstArr as $key => $value ){
    if( is_array($value) ){
        echo "<pre>";
        print_r(array_slice($value, 1, 1));
        echo "</pre>";
    }
}

echo 'получить общее количество элементов в массиве' . "<br>";
$count = count($firstArr);
foreach ( $firstArr as $key => $value ){
    if( is_array($value) ){
        $count += count($value);
        }
}
echo $count . "<br>";

echo 'получить сумму всех значений в массиве' . "<br>";
$sum = 0;
foreach ( $firstArr as $key => $value ){
    if( is_array($value) ){
        foreach ( $value as $k => $v ){
            $sum += $v;
        }
    }else{
        $sum += $value;
    }
}
echo $sum;