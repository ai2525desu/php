<?php
function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}

outputNumber(2);

echo "<br />";

function outputHello()
{
    echo "Hello world";
}

outputHello();

echo "<br />";

function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 4);
echo $total;

echo "<br />";

// 関数練習
// 自身で作成：形は問題なし。変数名のつけ方が解答では$aと$bになっている。
// 動作は問題なし
// $i=インクリメントなど繰り返しの文に使用することが慣例化しているので、その場面以外での使用は避けるひつようがある。
function num($i, $j)
{
    $value = $i + $j;
    return $value;
}

$total = num(2,3);
echo $total;

echo "<br />";

// 解答例
function addNumber($a, $b)
{
    $add = $a + $b;
    return $add;
}

$total = addNumber(2, 3);
print $total;
