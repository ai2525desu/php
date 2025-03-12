<?php
$i = 0;

while ($i < 3) {
    echo 'i = '. $i . '<br />';
    // 加減の各位置によって定義した変数にどのタイミングで加減するか変わる。注意。
    $i += 1;
}

// 自身で作成
$count = 0;

// 「<=20」だとcountの数値が２０以下の場合まで考えて数を足すループ指定になってしまうため誤り。
while ($count <= 20) {
    echo $count . "<br />";
    // echoの下に$count++だと「0」から「20以下」の数値が表出されてしまった。これは、一度echoで「0」を表出する指定をしていることになっているため誤り。
    $count++;
    
}

// 解答例
$count = 0;

// 「<20」だとcountを０～１９の値として増減を考えてくれる。
while ($count < 20) {
    $count += 1;
    echo $count . '<br />';
}

// 学びを受けて、再度自身で作成したものを見直し

$count = 0;

while ($count < 20) {
    $count++;
    echo $count . "<br />";
}

$i = 0;
while ($i < 10) {
    if ($i == 5) {
        break;
        // &iが5の時にループ抜け
    }
    echo $i;
    $i++;   
}

$i = 0;
while ($i < 10) {
    if ($i == 5) {
        $i++;
        continue;
        // $iが5の時に、$iに1を足す処理をし、スキップする。
    }
    echo $i;
    $i++;
}
echo '<br />'
?>
<?php
$count = 0;

while ($count <= 100) {
    // if ($count == 20) {
    //     break;
    // }
    // if ($count % 3 === 0) {
    //     $count++;
    //     continue;
    // }
    echo $count . '<br />';
    $count++;
}

