<?php
$a = 15;
$b = 3;
$c = 10;

// 解答例では、echoの部分で演算子を使用せず、$answerという形で新たに変数を設定後、echoによる表出を行っている。
// 狙いとして、$a,$b,$cの値が変更になった場合に変更する箇所が少なくて済むからではないかと思う
// また、直接echoに変数名と演算式を入力すると何を表出しているのか目に見えてわかりにくいことも考えられる
echo $a + $b;
echo "<br />";
echo $a - $b;
echo "<br />";
echo $a * $b;
echo "<br />";
echo $a / $b;
echo "<br />";
echo  $a - $c;
echo "<br />";
echo "<br />";
// 最後の解答が15÷10=5の計算だった。?>

<?php
// 解答例を見て入力
$a = 15;
$b = 3;
$c = 10;

// answerの変数名を使用することで、echo表出の指示に目に見えてわかりやすく、コードもシンプル
$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5;?>
