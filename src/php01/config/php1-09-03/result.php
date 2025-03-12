<?php
// 自身で作成
// 内容OK
// $name等の定義をまとめて先に定義してから、まとめてprintでの出力を行えると良かった。
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
print "私の名前は、" . $name . "<br />";

$goods = htmlspecialchars($_POST["goods"], ENT_QUOTES);
print "ご希望の商品は、" . $goods . "<br />";

$quantity = htmlspecialchars($_POST["quantity"], ENT_QUOTES);
print "注文数は、" . $quantity;

print "<br />";

// 解答例
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $number;
