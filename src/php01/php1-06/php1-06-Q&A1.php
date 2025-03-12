<!-- 応用問題１ -->

<!-- for文とif,elseif,elseの書き方蚤参考に自分で考えて作成 -->
 <!-- まず、ifに定義するものが共通事項でないとFizzBuzzの適応ができていなかった。その上でelseifの定義は共通ではなくそれぞれに適応する割り切れる数を条件として入力するとよかった -->
<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 === 0) {
        echo 'Fizz';
    }elseif ($i % 5 === 0) {
        echo 'Buzz';}
        elseif ($i % 3 === 0 && $i % 5 === 0) {
            echo 'FizzBuzz';}else { 
            echo $i;}
    }
?>
<!-- 解答例を見た後に自身の＆＆の定義の仕方があっていた確認のために書いたもの -->
 <!-- 解答例と同じように作動したのでOK。しかし<br />は解答例にはなく不要だった様子なので削除して他の解答と比較できるようにした -->
<?php
for ($i = 1; $i <= 50; $i++) {
    // ３でも５でも割り切れる数の指定OK
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 === 0) {
        echo "Fizz";
    } elseif ($i % 5 === 0) {
        echo "Buzz";
    } else {
        echo $i;
    }
}
?>

<!-- FizzBuzz問題とネットで検索して自身で作成 -->
 <!-- こちらも解答例と同じ動作をしたのでOK。しかし<br />は解答例にはなく不要だった様子 -->
<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 === 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 === 0) {
        echo "Fizz";
    } elseif ($i % 5 === 0) {
        echo "Buzz";
    } else {
        echo $i; 
    }
}
?>    

<!-- 解答例 -->
<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 == 0) {
        echo $FizzBuzz;
    } else if ($i % 3 == 0) {
        echo $Fizz;
    } else if ($i % 5 == 0) {
        echo $Buzz;
    } else {
        echo $i;
    }
}

echo "<br />";

// 再度応用問題を取り組んでみる
// 再度取り組んだ結果は、$i<=50の範囲設定ミスで、表記が1~49しか数字が表記されない設定になっていた($i<50にしていた)
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 == 0) {
        echo "Fizz";    
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } else {
        echo $i;
    }
}
