<?php
// 配列
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo '<br />';

echo $people[0];
echo '<br />';

// 連想配列
$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);

var_dump($people);
echo '<br />';

$people = [
    'person1' => 'taro',
    'person2' => 'jiro'
];

echo $people['person1'];
echo '<br />';

// 多次元配列
$people = [
    [
        'last_name' => '山田',
        'first_name' => '太郎',
        'age' => '29',
        'gender' => '男性'
    ],
    [
        'last_name' => '鈴木',
        'first_name' => '次郎',
        'age' => 25,
        'gender' => '男性'
    ],
    [
        'last_name' => '佐藤',
        'first_name' => '花子',
        'age' => 20,
        'gender' => '女性'
    ]    
];

echo $people[0]['last_name'];
echo '<br />';
// print_rは関数で、Arrayの内容のキーや値を抽出できる＋出力結果の取得ができる
print_r($people);
echo '<br />';
// var_dumpは関数で、print_rと異なり値の型も表示できる。
var_dump($people);
echo '<br />';