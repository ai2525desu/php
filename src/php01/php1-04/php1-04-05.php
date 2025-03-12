<?php
$a = 10;
$b = 10;
// 解答例「$a=$b=10;」
$c = 5;
$d = 5;
// 解答例「$c=$d=5;」

echo ++$a;
echo "<br/>";
echo $b++;
echo "<br/>";
echo --$c;
echo "<br/>";
echo $d--;
echo "<br/>";
// 後置加算子と後置減算子のものは、後でechoすると加算減算されたものが表出される。
// 下記はその例。教材にはない。自分で調べた結果。
echo $b;
echo "<br/>";
echo $d;
