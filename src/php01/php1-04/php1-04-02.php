<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

//複合演算子の仕様の仕方については問題なし
// 一方こちらはanswerを用いずにそのまま複合演算子の計算式を入力。その後、echoにて代入後の値を表出している。 
$answer1 = $a = $b;
$answer2 = $c += $d;

echo $answer1;
echo "<br />";
echo $answer2;?>

<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

// 計算式をそのまま明記し、echoによって代入した後の値をechoで表出している
$a = $b;
$c += $d;

echo $a;
echo "<br />";
echo $c;
echo "<br />";?>
