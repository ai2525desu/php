<!-- 練習問題２ -->
<!-- 自身で考えて作成した三角形の面積--> 
<?php
function triangle1($bottom, $height)
{
    // heigthのスペルミスで作動していなかったことが発覚。
    return $bottom * $height / 2;
    
}

$value1 = 12;
$value2 = 6;

$sum = triangle1($value1, $value2);

echo "三角形の面積は" . $sum . "㎠です";

echo "<br />"
?>

<!-- 上記のものがうまく作動しなくて再度調べて作成したもの -->
<?php
function triangle2($bottom, $height)
{
    // return内の()は不要。計算上で必要なものと混じる
    return ($bottom * $height / 2);
}

echo "三角形の面積は" . triangle2(18, 4) . "㎠です"; 

echo "<br />"
?>

<?php
// 四角形面積
function square($height, $beside)
{
    // return内の()は不要。計算上で必要なものと混じる
    return ($height * $beside);    
}

echo "四角形の面積は" . square(4, 4) . "㎠です";

echo "<br />"; 
?>
<!-- 台形の面積 -->
<?php
function trapezoid($up, $down, $height) 
{
    return ($up + $down) * $height / 2; 
}

echo "台形の面積は" . trapezoid(2, 6, 4) . "㎠です";
?>

<!-- 解答例 -->
 <!-- 関数をまとめて記載後、echoで出力するとコードがすっきりする -->
<?php
function getTriangleArea($base, $height)
{
    return $base * $height / 2;
}
function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTrapeZoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getTriangleArea(7, 8) . "\n";
echo getSquareArea(5, 5) . "\n";
echo getTrapeZoidArea(4, 5, 4);
