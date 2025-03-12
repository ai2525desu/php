<!-- 二重ループお手本数字で -->
<?php
// <br />の入れる箇所で動作が異なることに気づいた。
for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j < 5; $j++) {
        echo $i;
        echo $j;
        echo "<br />";    
    }
}

echo "<br />";

for ($i = 1; $i < 5; $i++) {
    for ($j = 1; $j < 5; $j++) {
        echo $i;
        echo $j;    
    }
    echo "<br />";
}

echo "<br />";

// for ループ勉強
$money = 0;
for ($hour = 1; $hour <= 8; $hour++) {
    $money = $hour * 2000;
    if ($money > 6000) {
        echo "今" . $hour . "時間働いて" . $money . "円です。6000円以上働いたから帰る!";
        break;
    }
    echo "今" . $hour . "時間働いて" . $money . "円です<br />";
}

echo "<br />";

// for　二重ループ勉強
$meter = 0;
$rest = 0;

for ($hour = 0; $hour <= 8; $hour++) {
    $meter = $hour * 10000;
    for ($i = 1; $i <= 2; $i++) {
        $rest++;
        if ($rest > 10) {
            echo "今" . $rest . "回休憩して" . $meter . "メートル走ったのでおしまい";
            break 2;
        }
    }
    echo "今" . $hour . "時間走って" . $meter . "メートル走った<br/>";
}

echo "<br />";

//　応用問題２

// 自身では"●"で表現する方法がわからず解決できず、解答を見た。
for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo $i;
        echo $j;
        echo "<br />"; 
    }
} 

// 解答見て作成
for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "●";
    }
    echo "<br />";
}

 echo "<br />";

// 再度挑戦
for ($i = 1; $i < 6; $i++) {
    for ($j =1; $j < 6; $j++){
        echo "●";
    }
     echo "<br />";
}
    