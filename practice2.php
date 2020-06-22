<?php
// 課題１
$name = "稲野有亮";
if ($name = "稲野有亮") {
  echo "私は稲野有亮です";
} else {
 echo "あなたの名前ではありません";
}
// 課題２
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
}
echo $total += $i;
echo $total;

// 課題３
$fruits = ["みかん", "バナナ", "りんご", "ぶどう", "なし"];
foreach ($fruits as $fruit) {
  echo "要素は" . $fruit;
  echo "\n";
}
// 応用問題
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}