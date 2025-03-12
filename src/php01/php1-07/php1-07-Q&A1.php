<!-- 自身で作成 -->
<?php
function totalScore($score1, $score2, $score3)
{
    $value = $score1 + $score2 + $score3;

    if ($value > 210) {
        echo "合計点は" . $value . "なので合格です";
    } else {
        echo "合計点は" . $value . "なので不合格です";
    }

    return $value;
}

totalScore(11, 100, 100);
echo "<br />";
echo (totalScore(11, 100, 100));

echo "<br />";

// 解答例
function exam($socore1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo "合計点は" . $total . "点なので合格です";
    } else {
        echo "合計点は" . $total . "なので不合格です";
    }
}

echo (exam(80, 60, 90));

