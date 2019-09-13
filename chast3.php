<?php
//задание1
$arr = ['a', 'b', 'c'];
foreach($arr as $my_arr)
{
    var_dump ($my_arr."<br />");
}
//задание2
$arr = ['a', 'b', 'c'];
foreach($arr as $my_arr)
{
    echo $my_arr;
}
//задание3
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0].'+'.$arr[1].', '.$arr[2].'+'.$arr[3].', '.$arr[0].'-'.$arr[3].', '.$arr[0].'/'.$arr[3];
//задание4
$arr = [2, 5, 3, 9];
$result=($arr[0]*$arr[1])+($arr[2]*$arr[3]);
echo $result;
//задание5
$arr [0]= 1;
$arr [5]= 2;
$arr [2]= 3;
$arr [6]= 4;
$arr [1]= 5;
var_dump($arr);
?>


