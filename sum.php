<?php
// 課題１
function sum($c) {
    $result = $c*2;

    return $result;
}
echo sum(2);

// 課題２
function f($a, $b) {
   $result1 = $a + $b;
    
 
    return $result1;
}
echo f(2, 4);

// 課題３
$arr = array(1, 3, 5, 7, 9);

echo array_product($arr);

// 課題４
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
    if($max_number < $a) {
        $max_number = $a;
    } 
 }
 return $max_number;
 }
 
// 課題５
// strip_tagsの使用
$myname = "<h1>稲野</h1>" . "<p>有亮</p>";
echo strip_tags($myname);

// array_pushの使用
$fruits = ["りんご", "バナナ", "みかん"];
array_push($fruits, "ぶどう", "なし");
print_r($fruits);

// array_mergeの使用
$array1 = array(1, 3, 5, 7, 9);
$array2 = array(2, 4, 6, 8, 10);
$array = array_merge($array1, $array2);
print_r($array);

// time, mktimeの使用
$now = time();
echo $now . "\n";

$now2 = mktime(13, 07, 30);
echo $now2 . "\n";

// dateの使用
echo date('2020/06/23') . "\n";

?>