<?php
$item ="javaScript";
$item = "PHP";
echo $item;?>

<?php
$item ="JavaScript";
echo $item;
echo "<br/>";
?>

<!--コーチからの問題。100までの数で奇数を出力する＋奇数の合計値を出力する  -->
<?php
$sum = 0;
for ($i =0; $i <= 100; $i++) {
    if ($i % 2 == 1) {
        $sum += $i; 
        echo $i;
        echo "<br />";   
    } 
}
echo $sum;