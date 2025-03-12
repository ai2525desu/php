<?php
$i = 0;

do {
    echo $i . '<br />';
    $i++;
} while ($i < 5);

// 自身
$num = 0;

do {
    echo 'num = ' . $num . '<br />';
    $num++;  
} while ($num < 3);

// 解答例
$num = 0;

do {
    echo 'num = ' . $num . '<br />';
    $num += 1;
} while ($num < 3);