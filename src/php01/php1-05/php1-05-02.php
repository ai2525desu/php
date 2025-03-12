<!-- 自身で作成 -->
<?php
$people = "Saburo";
// 下記の作成の仕方でも問題なく「三郎です」はブラウザで表出される
switch($people){
    case "Saburo":
        echo "三郎です";
        break;
    case "Zirou":
        echo "次郎です";
        break;
    default:
        echo "太郎です";
        // 誰かわかりませんなど共通で違うとわかるものを使う。などこれ以外のものに対する定義が必要。
        break;
    }
    echo "<br/>"?>

<!-- 解答例 -->

<?php
$people  = "Saburo";

switch ($people) {
    case "Taro":
        echo "太郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
    default:
        break;
}

// 自身で再度作成
$people = "Saburo";

switch ($people) {
    case "Taro":
        echo "太郎です";
        break;
    case "jiro":
        echo "次郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
    default:
        break;
}
    